<?php include "includes/head.php"?>

<?php include "includes/navigation.php"?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin Orien Cinema
                    <small>Author</small>
                </h1>

                <?php
                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                }else{
                    $source = "";
                }

                switch($source){
                    case 'edit_user':
                        include "includes/edit_user.php";
                        break;
                    default:
                        include "includes/all_users.php";
                        break;

                }

                ?>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


<?php include "includes/foot.php"?>
