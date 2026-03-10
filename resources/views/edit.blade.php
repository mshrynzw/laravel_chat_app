<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>メッセージ編集</title>

<style>

body{
font-family: Arial;
background:#f5f5f5;
}

.container{
width:500px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input{
width:100%;
padding:10px;
margin-bottom:20px;
}

button{
padding:10px 20px;
background:#4CAF50;
color:white;
border:none;
cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<h2>メッセージ編集</h2>

<form action="/message/{{ $message->id }}/update" method="POST">

@csrf

<input
type="text"
name="text"
value="{{ $message->text }}"
required
>

<button type="submit">
更新
</button>

</form>

</div>

</body>

</html>
