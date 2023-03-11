<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-mb-8">
            <div class="card w-50">
                <div class="card-header">
                    <h2 class="">Создание категории</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('makecategory')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="name" class="">Название категории</label>
                            <div class="col-md-3">
                                <input class="form-control " id="name" type="text" name="name" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Добавить категорию')); ?>

                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/praeuivg/dudzpez-m1/resources/views/makecategory.blade.php ENDPATH**/ ?>