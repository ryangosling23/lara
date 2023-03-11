

<?php $__env->startSection('content'); ?>

<div class="container">
   
        <div class="d-flex justify-content-center mb-3"><h2>КОРЗИНА</h2></div>
            <div class="row">  
                <?php $__currentLoopData = $p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 pb-5" >
                    <div class="card mb-3 h-100" style="width: 18rem;">

                    <img src="<?php echo e(url('/img')); ?>/<?php echo e($z->products->img); ?>" class="card-img-top h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Название: <?php echo e($z->products->name); ?></h5>
                            <p class="card-text">Цена: <?php echo e($z->products->price); ?></p>
                        <button type="submit" class="btn btn-primary">
                            <a href="/public/basket/<?php echo e($z->id); ?>/delete" class="btn btn-primary">
                                удалить
                                <i class="bi bi-trash3"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                            </a>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <a href="#" class="btn btn-primary">купить</a>
                        </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            
            </div>




    

</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/basket.blade.php ENDPATH**/ ?>