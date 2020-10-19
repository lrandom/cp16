<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat application </title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="login-screen">
        <div>
            <input type="text" name="nickname"/>
        </div>
        <div>
            <input type="button" value="Enter"/>
        </div>
    </div>

    <div class="chat-screen">
        <div class="message">
            <div class="inner"></div>
        </div>

        <div>
            <textarea></textarea>
            <input type="button" value="Send"/>
        </div>
    </div>
</div>

<style>
    .container {
        width: 500px;
        margin: 0px auto;
        border: 1px solid #cdcdcd;
    }

    .container .login-screen {
        width: 100%;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .container .login-screen input[type="button"] {
        margin-top: 10px;
        border: 1px solid #cdcdcd;
        padding: 10px;
    }
</style>
</body>
</html>