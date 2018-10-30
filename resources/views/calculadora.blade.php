
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/Reset.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>
    <div class="container">
        <div class="form__top">
            <h2>Calculadora de: <span>{{ $nombre }}</span></h2>
        </div>
            <form class="form__reg" action="{{url('calculadora')}}" method="POST">
                    {{ csrf_field() }}
                <input type="hidden" name="nombre" value="{{$nombre}}">
                    @if(isset($numero1) && isset($numero2))
                        <label for="numero1" class="text-white">Ingresa tu primer n&uacute;mero:</label>
                        <input class="input"
                        type="number"
                        name="numero1"
                        value="{{ $numero1 }}"
                        placeholder="&#35; Primer Numero" required autofocus>

                        <label for="numero2" class="text-white">Ingresa tu segundo n&uacute;mero:</label>
                        <input class="input"
                        type="number"
                        name="numero2"
                        value="{{ $numero2 }}"
                        placeholder="&#35; Segundo Numero" required>
                    @else
                        <label for="numero1" class="text-white">Ingresa tu primer n&uacute;mero:</label>
                        <input class="input"
                        type="number"
                        name="numero1"
                        placeholder="&#35; Primer Numero" required autofocus>

                        <label for="numero2" class="text-white">Ingresa tu segundo n&uacute;mero:</label>
                        <input class="input"
                        type="number"
                        name="numero2"
                        placeholder="&#35; Segundo Numero" required>
                    @endif
            <div class="btn__form">
                <button type="submit" value="Suma" name="operacion" class="btn__submit">Suma</button>
                <button type="submit" value="Resta" name="operacion" class="btn__submit">Resta</button>
                <button type="submit" value="Multiplicacion" name="operacion" class="btn__submit">Multipli</button>
                <button type="submit" value="Division" name="operacion" class="btn__submit">Division</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="form__top">
        @if(isset($resultado) && $error)
            <h2>Resultado</h2>

            <h1 style="color: red">{{$resultado}}</h1>
        @else
            <h1>Resultado</h1>

            <h1>{{$resultado}}</h1>
        @endif
        </div>
    </div>
</body>
</html>
