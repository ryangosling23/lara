<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="text-center">
    <a class="btn btn-success mb-3" href="<?php echo e(url('/admin/product')); ?>" role="button">Добавить товар</a><!--Кнопка на создание товара-->
    </div>
    <div class="row row-cols-2">
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--вывод товара-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body w-100">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-4 ">
                            <img src="<?php echo e(url('/img')); ?>/<?php echo e($p->img); ?>" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                            <h1>Название: <?php echo e($p->name); ?></h1><!--вывод имени товара с базы-->
                            <h3>Цена: <?php echo e($p->price); ?></h3><!--вывод цены товара с базы-->
                            <h5>Страна: <?php echo e($p->country); ?></h5><!--вывод страны-производителя товара с базы-->
                            <h5>Год: <?php echo e($p->year); ?></h5><!--вывод года выпуска товара с базы-->
                            <h5>Модель: <?php echo e($p->model); ?></h5><!--вывод модель товара с базы-->
                            <h5>Количество: <?php echo e($p->colvo); ?></h5><!--вывод модель товара с базы-->
                            <div class="">
                                <a role="button" href="<?php echo e(url('/admin/product/delete/')); ?>/<?php echo e($p->id); ?>" class="btn btn-warning mx-1 mt-2">Удалить</a> <!--удалить товар-->
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="text-center">
        <a class="btn btn-success mb-3" href="<?php echo e(url('/admin/category')); ?>" role="button ">Добавить категорию</a><!--Кнопка на добавление категории-->
    </div>
    <div class="row row-cols-2">
        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--вывод категорий-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            <h1><?php echo e($c->name); ?></h1><!--вывод имени товара с базы-->
                        </div>
                            <a role="button" href="<?php echo e(url('/admin/category/delete/')); ?>/<?php echo e($p->id); ?>" class="btn btn-warning mx-1 mt-2">
                            Удалить
                            </a> <!--удалить товар-->
                        
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/admin.blade.php ENDPATH**/ ?>