<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="d-flex justify-content-center">
            <div>
                <p><h2>TRUE GAMES</h2></p>

                <p><h2>Мы самые лютые самые лучшие</h2></p>
            </div>
        </div>
    </div>
<hr>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner justify-content-center">
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                    <div class="carousel-item active">
                        <?php else: ?>
                            <div class="carousel-item ">
                                <?php endif; ?>
                                <img src="<?php echo e($obprod->img); ?>" class="w-10 h-20 d-block carousel-img"
                                     alt="...">
                                <p class="d-flex justify-content-around"><?php echo e($obprod->name); ?></p>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/about.blade.php ENDPATH**/ ?>