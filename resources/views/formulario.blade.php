<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">
            form {
              /* Just to center the form on the page */
              margin: 0 auto;
              width: 400px;

              /* To see the limits of the form */
              padding: 1em;
              border: 1px solid #CCC;
              border-radius: 1em;
            }

            div + div {
              margin-top: 1em;
            }

            label {
              /* To make sure that all label have the same size and are properly align */
              display: inline-block;
              width: 90px;
              text-align: right;
            }

            input, textarea {
              /* To make sure that all text field have the same font settings
                 By default, textarea are set with a monospace font */
              font: 1em sans-serif;

              /* To give the same size to all text field */
              width: 300px;

              -moz-box-sizing: border-box;
                   box-sizing: border-box;

              /* To harmonize the look & feel of text field border */
              border: 1px solid #999;
            }

            input:focus, textarea:focus {
              /* To give a little highligh on active elements */
              border-color: #000;
            }

            textarea {
              /* To properly align multiline text field with their label */
              vertical-align: top;

              /* To give enough room to type some text */
              height: 5em;

              /* To allow users to resize any textarea vertically
                 It works only on Chrome, Firefox and Safari */
              resize: vertical;
            }

            .button {
              /* To position the buttons to the same position of the text fields */
              padding-left: 90px; /* same size as the label elements */
            }

            button {
              /* This extra magin represent the same space as the space between
                 the labels and their text fields */
              margin-left: .5em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <!-- Formulario -->
                <form action="({{}})" method="GET">
                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="user_name" />
                    </div>
                    <div>
                        <label for="name">Apellido:</label>
                        <input type="text" id="apellido" name="user_apellido" />
                    </div>
                    <div>
                        <label for="mail">E-mail:</label>
                        <input type="email" id="mail" name="user_email" />
                    </div>
                    <div>
                        <label for="msg">Message:</label>
                        <textarea id="msg" name="user_message"></textarea>
                    </div>
                    
                    <div class="button">
                        <button type="submit">Send your message</button>
                        <button type="submit">Send your message</button>
                        <button type="submit">Send your message</button>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
