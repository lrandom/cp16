<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <ol class="list-name">
        <li>Nguyen Thanh Luan</li>
        <li>Tran Nam</li>
        <li>Ngo Duc Son</li>
    </ol>

    <a class="btn-load-more">Load more</a>
</div>
</body>

<script>
    $(document).ready(function () {
        $('.btn-load-more').click(function () {
            //bat su kien click cho btn-load-more
            $.ajax({
                url: 'handle_ajax.php',
                method: 'POST',
                dataType: 'json',
                data: {action: 'fetch_data'},
                success: function (resp) {
                    //xử lý data
                    console.log(resp);
                    for (let i = 0; i < resp.length; i++) {
                        $('.list-name').append('<li>' + resp[i].name + '</li>');
                    }
                }
            });
        })
    })
</script>
</html>