<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido Calculadora </title>
	    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/Reset.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="container">
		<div class="form__top">
			<h2>bienvenido a tu Calculadora</h2>
		</div>

		<form class="form__reg" action="/calculadora" method="POST">
			{{ csrf_field() }}
			<label  for="nombre">Introduce tu Nombre:</label>
			<input  class="input" type="text" placeholder="&#128100;  Nombre" required autofocus name="nombre" >


			<div class="btn__form">
            	<button class="btn__submit" type="submit">Enviar</button>
            	<button class="btn__reset" type="reset" value="LIMPIAR">Clean </button>
            </div>

		</form>
	</div>
</body>
</html>
