<!--

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang='en' dir="<?php echo e(Route::currentRouteName() == 'rtl' ? 'rtl' : ''); ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>
        Triple Network
    </title>

    <!-- Metas -->

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('assets')); ?>/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo e(asset('assets')); ?>/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('assets')); ?>/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS Liberary -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="g-sidenav-show <?php echo e(Route::currentRouteName() == 'rtl' ? 'rtl' : ''); ?> <?php echo e(Route::currentRouteName() == 'register' || Route::currentRouteName() == 'static-sign-up'  ? '' : 'bg-gray-200'); ?> m-0">

<?php echo e($slot); ?>


<script src="<?php echo e(asset('assets')); ?>/js/core/bootstrap.min.js"></script>
<!-- <script src="<?php echo e(asset('assets')); ?>/js/core/popper.min.js"></script> -->
<!-- <script src="<?php echo e(asset('assets')); ?>/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/plugins/smooth-scrollbar.min.js"></script> -->
<?php echo $__env->yieldPushContent('js'); ?>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo e(asset('assets')); ?>/js/material-dashboard.min.js?v=3.0.0"></script>
  <!-- AOS animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\triple-network\resources\views/layouts/base.blade.php ENDPATH**/ ?>