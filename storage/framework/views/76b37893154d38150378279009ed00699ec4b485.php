<?php $__env->startSection('head'); ?>  
        <link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(url('css/login.css')); ?>"/>
        <script src="<?php echo e(url('js/registrazione.js')); ?>" defer></script>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('nav'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>
<?php $__env->stopSection(); ?>
        
       
       
<?php $__env->startSection('header'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenuto'); ?>

        <?php if($error=='username esistente'): ?>      
            <p>username già in uso</p>
        <?php elseif($error=='username esistente'): ?> 
            <p>Registrazione non avvenuta correttamente</p>     
        <?php endif; ?>

       
    
        <!--PARTE DATI REGISTRAZIONE-->
        <main>
            <form action="" name="iscriviti" method="POST" ">
            <?php echo csrf_field(); ?>
                <p>
                <label>Nome</label>
                <input type="text" name="nome" id="nome" pattern="[A-Za-z ]{2,20}$" title="Il nome deve contenere solo lettere e deve avere una lunghezza minima di 2 e massima di 20">
                </p>
                <p>
                <label>Cognome</label>
                <input type="text" name="cognome" id="cognome" pattern="[A-Za-z ]{2,20}$" title="Il cognome deve contenere solo lettere e deve avere una lunghezza minima di 2 e massima di 20">
                </p>
                <p>
                <label> Email</label>
                <input type="text" name="email" id="email" title="">
                </p>
                <p>
                <label>Username</label>
                <input type="text"  name="username" id="username" pattern="[A-Za-z0-9]{6,20}$" title="L'username deve contenere solo caratteri alfanumerici e deve avere una lunghezza minima di 6 e massima di 20">
                </p>
                <p>
                <label>Password</label>
                <input type="password" name="password" id="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$" title="La password deve contenere minimo 8, massimo 20 caratteri tra cui: una lettera maiuscola, una minuscola, un numero e un carattere speciale">
                </p>
                <input type="submit" value="Iscriviti">
            </form>  
        
        </main>

        <!--------------------------------------->



        <!--PARTE MESSAGGI DI ERRORE PER I DATI INSERITI-->
        <div id="error">
        </div>
        <!------------------------------------>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/registrazione.blade.php ENDPATH**/ ?>