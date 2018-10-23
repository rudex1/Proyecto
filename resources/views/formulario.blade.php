@extends('index')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel Formulario</title>

        <!-- Fonts
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
-->



        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale.min.css')}}">


    </head>
    <body>

            @section('formulario')
            <div class="content">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase text-white">Laravel Formulario</h1>
                </div>

                <!-- Formulario -->

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5"></h2>

                <form action="{{url('saludo')}}" method="POST">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name" class="text-white">Nombre:</label>
                            <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Nombre" size="30" maxlength="20" />
                        </div>
                        <div class="form-group">
                            <label for="name" class="text-white">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" placeholder="Apellido" size="30" maxlength="20" />
                        </div>
                        <div class="form-group">
                            <label for="mail" class="text-white">E-mail:</label>
                            <input type="email" id="mail" name="email" placeholder="E-mail" size="30" maxlength="50" />
                        </div>
                        <div class="form-group">
                            <label for="msg" class="text-white">Message:</label>
                            <textarea id="msg" name="message" placeholder="Message" maxlength="100"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="color" class="text-white">Color: </label>
                            <input name="color" type="color" value="#000000" />
                        </div>

                    <div class="button">
                        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
                        <button type="reset" class="btn btn-primary mx-auto">Borrar</button>
                        <button type="button" class="btn btn-primary mx-auto">Volver</button>
                    </div>
                </form>
            </div>
            @endsection
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
