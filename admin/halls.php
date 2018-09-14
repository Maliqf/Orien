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

                <div class="col-xs-6">                    
                    <?php
                    if(isset($_GET['edit'])){
                        $edit_lang_id = $_GET['edit'];
                        include "includes/hall_update.php";
                    }else{
                        include "includes/add_hall.php";
                    }
                    ?>

                
                    

                </div>

                <div class="col-xs-6">

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hall Name</th>
                            <th>No of Seats</th>
                            <th/>
                        </tr>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "Select * FROM halls";
                        $select_all_halls = mysqli_query($connection, $query);

                        while($row = $select_all_halls-> fetch_assoc()){
                            $hall_id = $row['Hall_id'];
                            $hall_name = $row['Hall_name'];
                            $No_seats =  $row['No_of_seats'];                           
                            echo "<tr>";
                            echo "<td>{$hall_id}</td>";
                            echo "<td>{$hall_name}</td>";
                            echo "<td>{$No_seats}</td>";
                            echo "<td><a href='halls.php?edit={$hall_id}'><button type='button' class='btn btn-info' name='edit'>Edit</button></a></td>";
                            echo "</tr>";
                        }

                        ?>                        

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


<?php include "includes/foot.php"?>
