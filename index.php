<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parrot demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css?v=<?=time()?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="client.js?v=<?=time()?>"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="name-addon1">Sender</span>
                </div>
                <input id="name" type="text" class="form-control" placeholder="Sender name" aria-label="Sender name" aria-describedby="name-addon1">
            </div>
            <div class="input-group mb-3">
                <input id="Message" type="text" class="form-control" placeholder="Message" aria-label="Message" aria-describedby="Message-addon2">
                <div class="input-group-append">
                    <button class="input-group-text btn btn-primary" onclick="sendMessage()" id="Message-addon2">Send</button>
                </div>
            </div>
        </div>
        <div class="col-md-12" id="chatHistory"></div>
        <div class="col-md-12" id="introBox">
            <div class="row">
                <div class="col-md-4">
                    <img style="width: 100%" src="/logo.png" alt="Parrot" class="responsive-image">
                </div>
                <div class="col-md-8 center">
                    <span class="logo">Parrot</span>
                    <p>
                        Open this page in another browser or device and try to send a message from first device to the second device and back. Worker have no connections limit and can be tested with unlimited devices. Besides you at this demo app can be other people and we kindly ask you to be adequate. Here also can be people under 16y.
                    </p>
                    <p>
                        <a href="https://github.com/mrananyan/parrot">Package source</a> |
                        <a href="https://github.com/mrananyan/parrot_demo">Demo app source</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<audio src="/wtf.mp3" id="parrot" style="display: none"></audio>
</body>
</html>