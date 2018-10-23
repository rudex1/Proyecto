
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/grayscale.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/grayscale.min.css')); ?>">

</head>
<body>


      <div class="container ce">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="col-xl-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="text-white panel-title">Calculadora de <?php echo e($nombre); ?></h1>
                </div>
                <div class="panel-body">
                <form action="<?php echo e(url('saludo')); ?>" method="POST">
                    <div class="form-group">
                      <label for="valor1s" class="text-white">Ingresa tu primer n&uacute;mero:</label>
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
                    <div class="form-group">
                        <label for="operador" class="text-white">Seleccione Operador:</label>
                        <select name="operador">
                            <option value="suma">Suma</option>
                            <option value="resta">Resta</option>
                            <option value="multiplicacion">Multiplicaci&oacute;n</option>
                            <option value="division">Divisi&oacute;n</option>
                        </select>
                    </div>
                    <button type="reset" value="" class="btn btn-primary btn-block text-white ">Borrar</button>
                    <button type="submit" class="btn btn-primary btn-block text-white ">Enviar</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <img src="" class="img-fluid" alt="">
      </div>
<div>
</div>


</body>
</html>
