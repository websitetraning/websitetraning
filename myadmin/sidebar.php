<?php
if ($_SESSION['admin_is_login']) {
    
}
else{
    echo '<script>location.href="login.php";</script>';
}
?>
<div id='layoutSidenav_nav'>
    <nav class='sb-sidenav accordion sb-sidenav-dark' id='sidenavAccordion'>
        <div class='sb-sidenav-menu'>
            <div class='nav'>
                <div class='sb-sidenav-menu-heading'>Home</div>
                <a class='nav-link' href='index.php'>
                    <div class='sb-nav-link-icon'><i class='fas fa-tachometer-alt'></i></div>
                    Dashboard
                </a>
                <div class='sb-sidenav-menu-heading'>Data Insert</div>
                <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseLayouts' aria-expanded='false' aria-controls='collapseLayouts'>
                    <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                    Layouts
                    <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                </a>
                <div class='collapse' id='collapseLayouts' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                    <nav class='sb-sidenav-menu-nested nav'><a class='nav-link' href='layout-static.php'>Static Navigation</a><a class='nav-link' href='layout-sidenav-light.php'>Light Sidenav</a></nav>
                </div>
                <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapsePages' aria-expanded='false' aria-controls='collapsePages'>
                    <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                    Pages
                    <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                </a>
                <div class='collapse' id='collapsePages' aria-labelledby='headingTwo' data-parent='#sidenavAccordion'>
                    <nav class='sb-sidenav-menu-nested nav accordion' id='sidenavAccordionPages'>
                        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#pagesCollapseAuth' aria-expanded='false' aria-controls='pagesCollapseAuth'>Authentication
                            <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div></a>
                        <div class='collapse' id='pagesCollapseAuth' aria-labelledby='headingOne' data-parent='#sidenavAccordionPages'>
                            <nav class='sb-sidenav-menu-nested nav'><a class='nav-link' href='login.php'>Login</a><a class='nav-link' href='register.php'>Register</a><a class='nav-link' href='password.php'>Forgot Password</a></nav>
                        </div>
                        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#pagesCollapseError' aria-expanded='false' aria-controls='pagesCollapseError'>Error
                            <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div></a>
                        <div class='collapse' id='pagesCollapseError' aria-labelledby='headingOne' data-parent='#sidenavAccordionPages'>
                            <nav class='sb-sidenav-menu-nested nav'><a class='nav-link' href='401.php'>401 Page</a><a class='nav-link' href='404.php'>404 Page</a><a class='nav-link' href='500.php'>500 Page</a></nav>
                        </div>
                    </nav>
                </div>
                <div class='sb-sidenav-menu-heading'>Admin Settings</div>
                <a class='nav-link' href='index.php?changepass'>
                    <div class='sb-nav-link-icon'><i class='fas fa-key'></i></div>
                    Change Password
                </a><a class='nav-link' href='index.php?adduser'>
                    <div class='sb-nav-link-icon'>
                        <i class='fas Search ResultsWeb results fa-user-plus'></i>
                    </div>
                    Add User
                </a>
            </div>
        </div>
        <div class='sb-sidenav-footer'>
            <div class='small'>Logged in as -:
                <a class="text-danger">
                    <?php
                    if ($_SESSION['admin_is_login']) {
                        echo  $_SESSION['Admin_Name'];
                    } ?>
                </a>
            </div>
        </div>
    </nav>
</div>