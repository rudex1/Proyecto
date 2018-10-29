
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
                  <h1 class="text-white panel-title">Calculadora de {{ $nombre }} @yield('nombre')</h1>
                </div>

              </div>
            </div>
        </div>
        <img src="" class="img-fluid" alt="">
      </div>
</body>
</html>
