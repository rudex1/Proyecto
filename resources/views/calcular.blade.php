@extens('saludo')
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
    <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="col-xl-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>La calculadora de {{$nombre}}</h1>
                </div>
                <div class="panel-body">
                    <form action="/calcular" method="POST">

                       @csrf
                       <input type="hidden" name="nombre" value="{{$nombre}}">
                       @if(isset($numero1) && isset($numero2))
                       <label for="numero1">Numero 1</label>
                       <input type="number" name="numero1" value="{{$numero1}}">
                       <br>
                       <label for="numero2">Numero 2</label>
                       <input type="number" name="numero2" value="{{$numero2}}">
                       @else
                       <label for="numero1">Numero 1</label>
                       <input type="number" name="numero1">
                       <br>
                       <label for="numero2">Numero 2</label>
                       <input type="number" name="numero2">
                       @endif

                       <br>

                       <input type="submit" value="sumar" name="operacion">
                       <input type="submit" value="restar" name="operacion">
                       <input type="submit" value="multiplicar" name="operacion">
                       <input type="submit" value="dividir" name="operacion">
                       <input type="submit" value="potencia" name="operacion">
                   </form>


                </div>
              </div>
            </div>
        </div>
        <img src="" class="img-fluid" alt="">
      </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($resultado) && $error)
           <h1>Resultado</h1>
           <br>
           <h1 style="color: red">{{$resultado}}</h1>
           @else
           <h1>Resultado</h1>
           <br>
           <h1>{{$resultado}}</h1>
           @endif
        </div>
    </div>

</body>
</html>
