<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido Calculadora </title>
	        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale.min.css')}}">
</head>
<body>
	<div class="container">
		<h2>bienvenido a tu Calculadora</h2>
		<form action="/calculadora" method="POST">
			{{ csrf_field() }}
			<label  for="nombre">Introduce Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre">
			<br>

			<button class="btn btn-primary btn-block text-white">Enviar</button>

		</form>
	</div>
</body>
</html>
