<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-around">


<div class="card" style="width: 18rem;">

            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img class="h-100" src="<?php echo e($obprod->img); ?>" alt="">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="card-body">
    
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5 class="card-title"><?php echo e($obprod->name); ?></h5>

        <p class="card-text">
                <h2>Цена: <?php echo e($obprod->price); ?>рублей.</h2>
            <?php if($obprod->colvo>0): ?>
                <?php if(auth()->guard()->check()): ?><a href="<?php echo e(url('/basket')); ?>/<?php echo e($obprod -> id); ?>" class="btn btn-primary">В корзину</a><?php endif; ?>
            <?php else: ?>
                <a class="#" href="">НЕТ В НАЛИЧИИ</a>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>

</div>

            <ul class="list-group list-group-flush">
            <li class="list-group-item">Дата производства: <?php echo e($obprod->year); ?></li>
            <li class="list-group-item">Страна производитель: <?php echo e($obprod->country); ?></li>
            <li class="list-group-item">Модель:<?php echo e($obprod->model); ?></li>
            <li class="list-group-item">
                <?php if($obprod->colvo>0): ?>
                    <p>В наличии: <?php echo e($obprod->colvo); ?></p>
                <?php else: ?>
                    <p>Нет в наличии</p>
                <?php endif; ?>
            </li>
            </ul>



</div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/productpage.blade.php ENDPATH**/ ?>