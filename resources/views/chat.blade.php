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

<div class="chat-messages" id="messages">

@foreach($messages as $message)

<div class="message">
<strong>User {{ $message->user_id }}:</strong>
{{ $message->text }}
</div>

@endforeach

</div>

<form action="/message" method="POST" class="chat-input" id="chatForm">

@csrf

<input
type="text"
name="text"
id="messageInput"
placeholder="メッセージ入力"
required
>

<button type="submit">
送信
</button>

</form>

</div>

<script>

const messages = document.getElementById("messages");
messages.scrollTop = messages.scrollHeight;

const form = document.getElementById("chatForm");

form.addEventListener("submit", function(){

setTimeout(function(){
document.getElementById("messageInput").value="";
},100);

});

</script>

</body>

</html>
