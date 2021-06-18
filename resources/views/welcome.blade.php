<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ATheneus - el juego</title>
        <link rel="icon" type="image/png" href="./css/favicon.png">
        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #363636;
                color: #aaa;
                font-family: 'Baloo Thambi 2', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .boton{
                border: 0;
                background: none;
                box-shadow: none;
                border-radius: 6px;
                width: 500px;
                height: 100px;
                background-color: #d55;
                font-size: 60%;
                font-family: 'Baloo Thambi 2', cursive;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    ATheneus <br><br> 
                    <a href="/play/"><button class="boton">Jugar</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
