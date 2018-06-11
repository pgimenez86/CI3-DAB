 
<?php $__env->startSection('title', 'Codeigniter 3 y Blade'); ?>
 
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
 
    <p>Sidebar.</p>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <p>Hola <?php echo e($name); ?></p>
    <?php if(sizeof($users) > 0): ?>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($user); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>