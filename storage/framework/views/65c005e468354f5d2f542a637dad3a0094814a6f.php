
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
      <div class="container center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="col-xl-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="text-white panel-title">Calculadora de <?php echo e($nombre); ?></h1>
                </div>
                <div class="panel-body">
                <form action="<?php echo e(url('saludo')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="nombre" value="<?php echo e($nombre); ?>">
                    <?php if(isset($numero1) && isset($numero2)): ?>
                        <label for="numero1" class="text-white">Ingresa tu primer n&uacute;mero:</label>
                        <input class="form-control"
                        type="number"
                        name="numero1"
                        value="<?php echo e($numero1); ?>"
                        placeholder="Primer Numero">
                        <label for="numero2" class="text-white">Ingresa tu segundo n&uacute;mero:</label>
                        <input class="form-control"
                        type="number"
                        name="numero2"
                        value="<?php echo e($numero2); ?>"
                        placeholder="Segundo Numero">
                    <?php else: ?>
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
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="operador" class="text-white">Seleccione Operador:</label>
                        <hr>
                        <button type="submit" value="Suma" name="operacion" class="btn btn-primary btn-block text-white ">Suma</button>
                        <button type="submit" value="resta" name="operacion" class="btn btn-primary btn-block text-white ">Resta</button>
                        <button type="submit" value="multiplicacion" name="operacion" class="btn btn-primary btn-block text-white ">Multipli</button>
                        <button type="submit" value="division" name="operacion" class="btn btn-primary btn-block text-white ">Division</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <img src="" class="img-fluid" alt="">
      </div>
    </div>
<!--<div>


</div>-->


</body>
</html>
