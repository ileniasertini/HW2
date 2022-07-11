<?php $__env->startSection('head'); ?>  
<link rel='stylesheet' href="<?php echo e(url('css/home.css')); ?>">
        <link rel='stylesheet' href="<?php echo e(url('css/login.css')); ?>">
        <script src="<?php echo e(url('js/login.js')); ?>" defer></script>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('nav'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>
<?php $__env->stopSection(); ?>
        
       
       
<?php $__env->startSection('header'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
<?php $__env->stopSection(); ?>

    
<?php $__env->startSection('contenuto'); ?>



        <?php if($error=='errore dati'): ?>
            <p> errore nella compilazione dei dati </p>
        <?php endif; ?>

      

      <!--PARTE LOGIN DATI-->
        <main>
            <form id="dati_login" action="" name="login" method="POST">
            <?php echo csrf_field(); ?>
                <p>
              <label>Username</label><input type="text" name="username" >
                </p>
                <p>
              <label>Password</label><input type="password" name="password" >
                </p>
                <p>
                <input type="submit" name="submit" id="submit" value="Login" >
                </p>
            </form>
        </main>
        <!--PARTE LOGIN DATI-->


        <div id='registrazione'>
            <a href="<?php echo e(url('registrazione')); ?>">Devi ancora registrarti?</a>
        </div>



        <?php $__env->stopSection(); ?>
        

        <?php $__env->startSection('footer'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/login.blade.php ENDPATH**/ ?>