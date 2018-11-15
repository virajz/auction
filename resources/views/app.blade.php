<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auction</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .flex {
                display: flex;
            }

            .flex-col {
                display: flex;
                flex-direction: column;
            }
            
            .flex-1 {
                flex: 1;
            }

            .teams {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }

            .teams > .flex-col {
                border-right: 1px solid #eee;
                border-top: 1px solid #eee;
            }

            .team {
                text-align: center;
            }

            .team h3, .team h4 {
                margin: 5px 0 20px;
            }

            .team p {
                margin: 0;
            }

            ol {
                list-style: none;
                margin: 0;
                padding: 0;
                width: 300px;
                border-right: 1px solid #eee;
                height: 100vh;
                overflow-y: scroll;
            }

            li > a {
                display: block;
                color: #636b6f;
                padding: 10px 20px;
                text-decoration: none;
                border-bottom: 1px solid #eee;
                border-left-width: 10px;
                border-left-style: solid;
            }
        </style>
    </head>
    <body>
        <div class="flex">
            @yield('content')
        </div>
    </body>
</html>
