<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="">
                <span class="ms-2 font-weight-bold text-white">triple-network</span>
            </a>
    </div>
    
    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'user-profile' ? ' active bg-gradient-primary' : ''); ?> >
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'user-management' ? ' active bg-gradient-primary' : ''); ?> >
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Site</h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'site.list' ? ' active bg-gradient-primary' : ''); ?> >
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">business</i> 
                    </div>
                    <span class="nav-link-text ms-1">Sites</span> 
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Route::currentRouteName() == 'contact' ? ' active bg-gradient-primary' : ''); ?>"
                href="<?php echo e(route('contact')); ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Contact </i>
                    </div>
                    Contact Us
                </a>
            </li>


            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Site items</h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-white " href="">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">map</i>
                    </div>
                    <span class="nav-link-text ms-1">Location</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">apartment</i>
                    </div>
                    <span class="nav-link-text ms-1">Building</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">layers</i>
                    </div>
                    <span class="nav-link-text ms-1">Floor</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">layers</i>
                    </div>
                    <span class="nav-link-text ms-1">Distribution Frame</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
<?php /**PATH C:\xampp\htdocs\triple-network\resources\views/components/navbars/sidebar.blade.php ENDPATH**/ ?>