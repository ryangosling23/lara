<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-2">
                <h2>TRUE GAMES</h2>
            </div>
            <div class="col-10">
                <h2>Мы самые лютые самые лучшие</h2>
            </div>
        </div>
        <hr>
        <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                <div class="carousel-item active">
                    <?php else: ?>
                    <div class="carousel-item">
                        <?php endif; ?>
                        <img src="<?php echo e($pp->img); ?>" class="d-block mx-auto carousel-img" alt="tovar">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="name_tovar"><?php echo e($pp->name); ?></h1>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <?php $__env->stopSection(); ?>

        

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/about.blade.php ENDPATH**/ ?>