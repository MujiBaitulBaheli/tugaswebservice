<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo e(asset ('assets/bootstrap.min.css')); ?>" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>

              <?php if(auth()->guard()->check()): ?>
              <li class="nav-item">
                <h6>welcome <?php echo e(auth()->user()->name); ?></h6>
              </li>
              <li class="nav-item">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-link">Logout</button>
              </li>
              <?php else: ?>
              <li class="nav-item">
                <a href="<?php echo e(route('login')); ?>" class="nav-link" style="margin-left: 950px">Login</a>
              </li>
              <?php endif; ?>


            </ul>
          </div>
        </div>
      </nav>

      <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH D:\laragon\www\webservice\resources\views/app.blade.php ENDPATH**/ ?>