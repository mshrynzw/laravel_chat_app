<!DOCTYPE html>
<html>
<head>
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
        }
    </style>

</head>
<body>

<div class="chat-container">

    <div class="chat-header">
        Laravel Chat
    </div>

    <div class="chat-messages">

        <div class="message">
            <strong>User1:</strong> Hello
        </div>

        <div class="message">
            <strong>User2:</strong> Hi!
        </div>

    </div>

    <div class="chat-input">

        <input type="text" placeholder="メッセージ入力">

        <button>送信</button>

    </div>

</div>

</body>
</html>
