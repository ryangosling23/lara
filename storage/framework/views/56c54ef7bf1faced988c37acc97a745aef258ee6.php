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
    <div class="row justify-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo e(url('/public/img/roblox-best-games-roblox-main-promo-image (1).jpg')); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(url('/public/img/nintendo-switch-lite-coral (2).jpg')); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(url('/public/img/battlefield-2042-key-art.jpg.adapt.crop1x1.767p (3).jpg')); ?>" class="d-block w-100" alt="...">
              </div>
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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/about.blade.php ENDPATH**/ ?>