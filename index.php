<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parrot demo</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="client.js"></script>
</head>
<body>
<div id="chatHistory"></div>
<hr>
<input class="input" type="text" id="name" placeholder="Name">
<br>
<textarea class="input" id="message" placeholder="Message"></textarea>
<br>
<button onclick="sendMessage()">Send</button>
</body>
</html>