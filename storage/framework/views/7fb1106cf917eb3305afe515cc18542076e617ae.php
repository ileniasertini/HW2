<?php $__env->startSection('head'); ?>  
    <link rel='stylesheet' href="<?php echo e(url('css/contatti.css')); ?>">
    <script src="<?php echo e(url('js/recensione_visualizza.js')); ?>" defer></script>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('nav'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>
<?php $__env->stopSection(); ?>
        
       
       
<?php $__env->startSection('header'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
<?php $__env->stopSection(); ?>

    

<?php $__env->startSection('contenuto'); ?>
        <!--PARTE CONTATTI-->
        <div id="contact">
                <p>
                    Vieni a trovarci!</br>
                    Ilenia's Shop - via etnea 20, Catania(CT)</br>
                    Tel.:095 1234567</br>
                    email: ileniashop_hotmail.it</br>
                    <img src="mappa.png" />
                </p>    
        </div>
        <!------------------->



        <!--PARTE BOTTONE RICENSIONE-->
        <button id="bottone_recensione">
            <p id="mostra_recensioni"> > Visualizza recensioni degli utenti su di noi</p>
        </button>
        <!------------------------------------>

        

        <!--PARTE VISUALLIZZAZIONE RICENSIONE-->
        <section id="tutte_recensioni">
        </section>
        <!------------------------------------>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/contatti.blade.php ENDPATH**/ ?>