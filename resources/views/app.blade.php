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
                font-weight: 600;
                margin: 0;
            }

            h1, h2, h3, h4, p { margin: 0; }
            a { text-decoration: none }
            .flex { display: flex; }
            .justify-between { justify-content: space-between; align-items: center }
            .flex-col { display: flex; flex-direction: column; }
            .flex-1 { flex: 1; }
            .teams { width: 400px; height: 100vh; overflow-y: scroll; }
            .team { text-align: center; justify-content: center; }
            .team h3 { margin-bottom: 20px; }
            .team p { margin-bottom: 2px; }
            .team h4 { font-size: 30px; }
            
            ol {
                list-style: none;
                margin: 0;
                padding: 0;
                width: 320px;
                border-right: 1px solid #eee;
                height: 100vh;
                overflow-y: scroll;
            }

            ol > li { padding-right: 20px; border-bottom: 1px solid #eee; }

            li > a {
                display: block;
                color: #636b6f;
                padding: 10px 20px;
                border-left-width: 10px;
                border-left-style: solid;
            }

            li > a.picked { color: #ccc }

            .team-dot {
                display: block;
                width: 10px;
                height: 10px;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <div class="flex">
            @yield('content')
        </div>
    </body>
</html>
