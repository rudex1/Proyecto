
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale.min.css')}}">

</head>
<body>
<<<<<<< HEAD

      <div class="container">
=======
      <div class="container center">
>>>>>>> cfe3c2d64ab59e2d75282a5f93a48c22ecf2571c
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="col-xl-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading">
<<<<<<< HEAD
                  <h1 class="text-white panel-title">Calculadora de {{ $nombre }} @yield('nombre')</h1>
=======
                  <h1 class="text-white panel-title">Calculadora de {{ $nombre }}</h1>
                </div>
                <div class="panel-body">
                <form action="{{url('calculadora')}}" method="POST">
                    {{ csrf_field() }}

                    <input type="hidden" name="nombre" value="{{$nombre}}">
                    @if(isset($numero1) && isset($numero2))
                        <label for="numero1" class="text-white">Ingresa tu primer n&uacute;mero:</label>
                        <input class="form-control"
                        type="number"
                        name="numero1"
                        value="{{$numero1}}"
                        placeholder="Primer Numero">
                        <label for="numero2" class="text-white">Ingresa tu segundo n&uacute;mero:</label>
                        <input class="form-control"
                        type="number"
                        name="numero2"
                        value="{{$numero2}}"
                        placeholder="Segundo Numero">
                    @else
                        <label for="numero1" class="text-white">Ingresa tu primer n&uacute;mero:</label>
                        <input class="form-control"
                        type="number"
                        name="numero1"
                        placeholder="Primer Numero">
                        <label for="numero2" class="text-white">Ingresa tu segundo n&uacute;mero:</label>
                        <input class="form-control"
                        type="number"
                        name="numero2"
                        placeholder="Segundo Numero">
                    @endif

                    <div class="form-group">
                        <label for="operador" class="text-white">Seleccione Operador:</label>
                        <hr>
                        <button type="submit" value="Suma" name="operacion" class="btn btn-primary btn-block text-white ">Suma</button>
                        <button type="submit" value="resta" name="operacion" class="btn btn-primary btn-block text-white ">Resta</button>
                        <button type="submit" value="multiplicacion" name="operacion" class="btn btn-primary btn-block text-white ">Multipli</button>
                        <button type="submit" value="division" name="operacion" class="btn btn-primary btn-block text-white ">Division</button>
                    </div>
                  </form>
>>>>>>> cfe3c2d64ab59e2d75282a5f93a48c22ecf2571c
                </div>

              </div>
            </div>
        </div>
        <img src="" class="img-fluid" alt="">
      </div>
<<<<<<< HEAD
=======
    </div>
>>>>>>> cfe3c2d64ab59e2d75282a5f93a48c22ecf2571c
</body>
</html>
