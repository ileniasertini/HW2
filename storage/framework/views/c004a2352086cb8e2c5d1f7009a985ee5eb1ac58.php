<?php $__env->startSection('head'); ?>  
    <link rel='stylesheet' href="<?php echo e(url('css/home.css')); ?>">
    <script src="<?php echo e(url('js/carrello_upload.js')); ?>" defer></script>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('nav'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>
<?php $__env->stopSection(); ?>
        
       
       
<?php $__env->startSection('header'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
<?php $__env->stopSection(); ?>

    

<?php $__env->startSection('contenuto'); ?>

        <!--PARTE DEL NON LOGIN-->
        <div id="errore_carrello_visualizza">
            <?php if($username != null): ?>
                <?php echo e($username); ?>, ecco i tuoi prodotti aggiunti al carrello
            <?php else: ?>
                Devi prima accedere per poter aggiungere contenuti al carrello e visualizzarlo
            <?php endif; ?>
        </div>
        <!------------------------------>



        <!--PARTE VISUALIZZAZIONE ARTICOLI CARRELLO-->
        <section id="section_visualizza_carrello">
        </section>
        <!------------------------------>
<?php $__env->stopSection(); ?>
        

        
<?php $__env->startSection('footer'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/carrello.blade.php ENDPATH**/ ?>