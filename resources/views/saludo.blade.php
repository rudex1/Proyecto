
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


      <div class="container center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="col-xl-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="text-white panel-title">Calculadora de {{ $nombre }}</h1>
                </div>
                <div class="panel-body">
                <form action="{{url('saludo')}}" method="POST">
                    <div class="form-group">
                      <label for="valor1" class="text-white">Ingresa tu primer n&uacute;mero:</label>
                      <input class="form-control"
                        type="text"
                        name="valor1"
                        placeholder="Primer valor">
                    </div>
                    <div class="form-group">
                      <label for="valor2" class="text-white">Ingresa tu segundo valor:</label>
                      <input class="form-control"
                        type="text"
                        name="valor2"
                        placeholder="Segundo valor">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="operador" class="text-white">Seleccione Operador:</label>
                        <hr>
                        <button type="submit" value="Suma" class="btn btn-primary btn-block text-white ">Suma</button>
                        <button type="submit" value="resta" class="btn btn-primary btn-block text-white ">Resta</button>
                        <button type="submit" value="multiplicacion" class="btn btn-primary btn-block text-white ">Multipli</button>
                        <button type="submit" value="division" class="btn btn-primary btn-block text-white ">Division</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <img src="" class="img-fluid" alt="">
      </div>
    </div>
<div>

</div>


</body>
</html>
