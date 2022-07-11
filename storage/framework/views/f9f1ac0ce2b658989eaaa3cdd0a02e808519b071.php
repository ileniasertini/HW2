<?php $__env->startSection('head'); ?>  
<link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>"/>
<script src="<?php echo e(url('js/prodotti_upload.js')); ?>" defer></script>
        <script src="<?php echo e(url('js/prodotti_cerca.js')); ?>" defer></script>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('nav'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>
    <?php $__env->stopSection(); ?>
        
       
       
        <?php $__env->startSection('header'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
        <?php $__env->stopSection(); ?>
        
        
    <?php $__env->startSection('contenuto'); ?>
        

        
        <!--PARTE ERRORE PER IL NON LOGIN IN CASO DI ACQUISTO-->
        <div id="error">
        </div>
        <!--------------------------->


        <!--PARTE CERCA PRODOTTO-->
        <form  id="cerca_prodotto" method="get">
            <h3>CERCA PRODOTTO</h3>
            <input type="text" id="prodotto"></input> 
            <input type='submit' id="prodotto_invio"></input>
        </form>
        <!--------------------------->



        <!--PARTE VISUALIZZAZIONE PRODOTTI-->
        <section id=sezione> 
        </section>
        <!--------------------------->

        <?php $__env->stopSection(); ?>


        <?php $__env->startSection('footer'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/prodotti.blade.php ENDPATH**/ ?>