<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sendero Cornizuelo</title>
          
        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
  
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>
         <!--Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(50, 51, 50);" id="SenderoCornizuelo" >
    <a class="navbar-brand text-white" id="Inicio">
        <img src="http://www.cemede.una.ac.cr/wp-content/uploads/2020/08/LOGOS-CEMEDE-Y-SEDES.png" height="80px" >
    </a>
    <a class="navbar-brand text-danger" href="<?php echo e(url('/')); ?>">Sendero Cornizuelo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
  </nav>

  <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\APP_SENDERO_CORNIZUELO-master\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>