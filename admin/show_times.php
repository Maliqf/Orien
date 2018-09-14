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
                    if(isset($_POST['submit'])){

                        $show_time = date('H:i:s', strtotime($_POST['show_time']));

                        if($show_time == "" || empty($show_time)){
                            echo "Show time field is empty";
                        }else{

                            $query = "Select * FROM show_times WHERE show_time='" . $show_time . "'";
                            $select_showTime_exist = mysqli_query($connection, $query);
                            if(mysqli_fetch_row($select_showTime_exist)){
                                echo "Data already exist!";
                            }
                            else{

                            $in_query = "INSERT into show_times(show_time) ";
                            $in_query .= "VALUE('{$show_time}')";                            

                            $create_category_query = mysqli_query($connection, $in_query);
                            if(!$create_category_query){
                                echo "Query Failed";
                                die('Query Failed' . mysqli_error($connection));
                            }
                            header("Location: show_times.php");
                            }
                        }
                        }

                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="show_time">Show Time</label>
                            <input class="form-control" type="time" name="show_time" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Show Time">
                        </div>
                    </form>




                
                    

                </div>

                <div class="col-xs-6">

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Show Time</th>
                        </tr>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "Select * FROM show_times";
                        $select_all_showTimes = mysqli_query($connection, $query);

                        while($row = $select_all_showTimes-> fetch_assoc()){
                            $show_time_id = $row['show_time_id'];
                            $show_time = $row['show_time'];                           
                            echo "<tr>";
                            echo "<td>{$show_time_id}</td>";
                            echo "<td>{$show_time}</td>";
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
