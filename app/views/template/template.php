<!DOCTYPE html>
<html lang="en">

<?php

$public = false;
$haveUrl= array_key_exists('url',$_GET);

if($haveUrl){
    $currentLink = $_GET['url'];
    if (!empty($currentLink)) {
        $public = in_array($currentLink, PUBLIC_PATH);
    }
}







?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include "header.php" ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php
        if (!$public) {
            include "sidebar.php";
        }
        ?>
        <div id="content-wrapper" class="d-flex flex-column" style="min-height: 100vh;">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                if (!$public) {
                    include "topbar.php";
                }
                ?>
                <div class="container-fluid">
                    <?php include(dirname(__DIR__) . "/$data[content].php") ?>
                </div>
            </div>
            <!-- End of Footer -->
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "footer.php" ?>

<?php include "script.php" ?>

</html>