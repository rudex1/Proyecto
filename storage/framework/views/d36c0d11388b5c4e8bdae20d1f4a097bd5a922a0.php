<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
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
            }html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laravel Formulario
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <br>
                <!-- Formulario -->
                <form action="<?php echo e(url('saludo')); ?>" method="GET">
                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" placeholder="Nombre" size="30" maxlength="20" />
                    </div>
                    <div>
                        <label for="name">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" size="30" maxlength="20" />
                    </div>
                    <div>
                        <label for="mail">E-mail:</label>
                        <input type="email" id="mail" name="email" placeholder="E-mail" size="30" maxlength="50" />
                    </div>
                    <div>
                        <label for="msg">Message:</label>
                        <textarea id="msg" name="message" placeholder="Message" maxlength="100"></textarea>
                    </div>
                    <div>
                        <label for="color">Color: </label>
                        <input name="color" type="color" value="#000000" />
                        <?php 
                            /*if ($_GET['color'])
                            echo "El color seleccionado es: " .$_GET['color'];
                        $(document).ready(function(){
                                $("input[name=color]").change(function(){
                                    alert($('input[name=color]').val());
                                    $('#colorseleccionado').val($(this).val());
                                });
                            });*/
                        ?>

                    </div>
                    
                    <div class="button">
                        <button type="submit">Enviar</button>
                        <button type="reset">Borrar</button>
                        <button type="button">Volver</button>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
