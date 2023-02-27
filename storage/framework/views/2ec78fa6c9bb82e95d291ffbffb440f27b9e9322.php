<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="d-flex justify-content-center">
        <h2>КАТАЛОГ</h2>


    </div>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Список
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Игры</a></li>
          <li><a class="dropdown-item" href="#">Консоли</a></li>
          <li><a class="dropdown-item" href="#">Аксесуары</a></li>
        </ul>
      </div>


    <div class="row">
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top h-100" src="<?php echo e($obprod->img); ?>" src="..." alt="cardimg">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($obprod->name); ?></h5>
                    <p class="card-text">Цена:<?php echo e($obprod->price); ?>руб</p>
                    <a href="#" class="btn btn-primary">Купить</a>
                    </div>
                </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/catalog.blade.php ENDPATH**/ ?>