<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();

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
}
