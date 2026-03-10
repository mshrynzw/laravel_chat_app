<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Laravel Chat</title>

<style>

body{
font-family: Arial;
background:#f5f5f5;
}

.chat-container{
width:600px;
margin:50px auto;
background:white;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
display:flex;
flex-direction:column;
}

.chat-header{
padding:15px;
border-bottom:1px solid #eee;
font-weight:bold;
}

.chat-messages{
height:400px;
overflow-y:auto;
padding:15px;
}

.message{
margin-bottom:10px;
}

.edit-btn{
margin-left:10px;
font-size:12px;
}

.delete-btn{
margin-left:5px;
font-size:12px;
color:red;
}

.chat-input{
display:flex;
border-top:1px solid #eee;
}

.chat-input input{
flex:1;
padding:10px;
border:none;
}

.chat-input button{
width:80px;
border:none;
background:#4CAF50;
color:white;
cursor:pointer;
}

</style>

</head>

<body>

<div class="chat-container">

<div class="chat-header">
Laravel Chat
</div>

<div class="chat-messages">

@foreach($messages as $message)

<div class="message">

    <strong>
        {{ $message->user->name }}:
        </strong>
        {{ $message->text }}

<a class="edit-btn" href="/message/{{ $message->id }}/edit">
編集
</a>

<form action="/message/{{ $message->id }}/delete" method="POST" style="display:inline;">
@csrf
<button class="delete-btn" type="submit">
削除
</button>
</form>

</div>

@endforeach

</div>

<form action="/message" method="POST" class="chat-input">

@csrf

<input
type="text"
name="text"
placeholder="メッセージ入力"
required
>

<button type="submit">
送信
</button>

</form>

</div>

</body>
</html>
