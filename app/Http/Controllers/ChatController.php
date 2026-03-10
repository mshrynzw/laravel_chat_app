<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at','asc')->get();

        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        Message::create([
            'user_id' => 1,
            'text' => $request->text
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $message = Message::findOrFail($id);

        return view('edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);

        $message->update([
            'text' => $request->text
        ]);

        return redirect('/');
    }
}
