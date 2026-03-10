<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ChatController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $messages = Message::with('user')
            ->orderBy('created_at','asc')
            ->get();

        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:1000'
        ]);

        Message::create([
            'user_id' => Auth::id(),
            'text' => $request->text
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $message = Message::findOrFail($id);

        // 認可チェック
        $this->authorize('update', $message);

        return view('edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required|string|max:1000'
        ]);

        $message = Message::findOrFail($id);

        // 認可チェック
        $this->authorize('update', $message);

        $message->update([
            'text' => $request->text
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);

        // 認可チェック
        $this->authorize('delete', $message);

        $message->delete();

        return redirect('/');
    }
}
