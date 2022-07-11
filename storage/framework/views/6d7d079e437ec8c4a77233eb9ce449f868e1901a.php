<html>
    <head>
        <?php $__env->startSection('head'); ?>
        <title>Ilenia'Shop</title>
        <script>
            const BASE_URL="<?php echo e(url('/')); ?>/";
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Dancing+Script&family=Merriweather:ital,wght@1,300&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">  
        <?php echo $__env->yieldSection(); ?>
    </head>


    <body>
        <!-----NAV------>
        <nav>
        <?php $__env->startSection('nav'); ?>
            <?php if($username != null): ?>
                <a href="<?php echo e(url('home')); ?>"> Home </a>
                <a href="<?php echo e(url('prodotti')); ?>"> Prodotti </a>
                <a href="<?php echo e(url('contatti')); ?>"> Chi Siamo </a>
                <a href="<?php echo e(url('carrello')); ?>"> Carrello </a>
                <a href="<?php echo e(url('logout')); ?>"> Logout </a>
            <?php else: ?>
                <a href="<?php echo e(url('home')); ?>"> Home </a>
                <a href="<?php echo e(url('prodotti')); ?>"> Prodotti </a>
                <a href="<?php echo e(url('contatti')); ?>"> Chi Siamo </a>
                <a href="<?php echo e(url('login')); ?>"> Accedi </a>
                <a href="<?php echo e(url('carrello')); ?>"> Carrello </a>
            <?php endif; ?>
        <?php echo $__env->yieldSection(); ?>
        </nav>
        <!--------------->
        
       
        <!-----HEADER------>
        <?php $__env->startSection('header'); ?>
        <div id="overlay">
            <header>
                <h1>Ilenia' s Shop</h1>
            </header>
        </div> 
        <?php echo $__env->yieldSection(); ?>
        <!--------------->

        

        <!----PARTE NON COMUNE---->
        <?php echo $__env->yieldContent('contenuto'); ?>
        <!----------------->



        <!-----FOOTER------>
        <footer>
        <?php $__env->startSection('footer'); ?>
            <div id="me">
                <p>
                    Ilenia's Shop - via etnea 20, Catania(CT)</br>
                    Tel.:095 1234567</br>
                    email: ileniashop_hotmail.it</br>
                </br>
                ILENIA SERTINI 1000004431
                </p>    
            </div>
        <?php echo $__env->yieldSection(); ?>
        </footer>
        <!--------------->


    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/layout.blade.php ENDPATH**/ ?>