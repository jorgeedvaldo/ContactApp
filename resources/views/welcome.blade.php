<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles

        <style>
           body {
                font-family: "Nunito";
                font-size: 16px;
            }
            div.container {
                width: 78%;
                margin: 0 auto;
            }
            form div, form label, form input {
                display:block;
            }

            form div {
                margin-bottom: 10px;
            }

            form input {
                padding: 5px;
                width: 100%;
                border-radius: 5px;
                border: none;
                border-bottom: 1px solid #ccc;
                outline: none;
            }

            form button {
                padding: 10px 15px;
                background: #036;
                border: 1px solid #000;
                border-radius: 5px;
                color: #fff;
                font-weight: bold;
            }

            div.error-message {
                color: #f00;
                font-weight: bold;
                padding-top: 4px;
            }
        </style>
    </head>
    <body>
       @livewire('contact-create')
    </body>
    @livewireScripts
</html>
