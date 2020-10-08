<?php
session_start();
include("connect.php");
if ($_SESSION['admin_is_login']) {
    if ($_SESSION['admin_is_login'] == true) {
        $sellerphone = $_SESSION['Admin_Name'];
    } else {
        echo ' <script>location.href="login.php";</script>';
    }
} else {
    echo ' <script>location.href="login.php";</script>';
}
include("header.php");
include("navbar.php");
?>

<div id='layoutSidenav'>
    <?php include("sidebar.php"); ?>
    <div id='layoutSidenav_content'>
        <main>
            <div class='container-fluid'>
                <?php
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    switch ($id) {
                        case 'dashboard':
                            include('dashboard.php');
                            break;
                        case 'changepass':
                            include('password.php');
                            break;
                        case 'adduser':
                            include('adduser.php');
                            break;
                        case 'dashboard':
                            include('dashboard.php');
                            break;
                        
                    }
                }
                ?>
            </div>
        </main>
        <?php include('footer.php'); ?>
    </div>
</div>
<script src='https://code.jquery.com/jquery-3.4.1.min.js' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
<script src='js/scripts.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js' crossorigin='anonymous'></script>
<script src='assets/demo/chart-area-demo.js'></script>
<script src='assets/demo/chart-bar-demo.js'></script>
<script src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js' crossorigin='anonymous'></script>
<script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js' crossorigin='anonymous'></script>
<script src='assets/demo/datatables-demo.js'></script>
</body>

</html>