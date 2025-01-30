<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Loading...</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .progress {
                height: 300px;
            }
            .progress > svg {
                height: 80%;
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body>
        <div class="progress" id="progress"></div>
        <script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.5.6/dist/progressbar.js"></script>
        <script src="main.js"></script>
    </body>
</html>