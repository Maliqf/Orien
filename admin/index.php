<?php include "includes/head.php"?>

<?php include "includes/navigation.php"?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin Orien Cinema
                            <small>
                                <?php echo ucfirst($_SESSION['user_name']);?>
                            </small>
                        </h1>
                        <?php
                        include "includes/dahsboard.php";
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "includes/foot.php"?>
