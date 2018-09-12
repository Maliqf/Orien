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

                        $cat_title = trim($_POST["cat_title"]);

                        if($cat_title == "" || empty($cat_title)){
                            echo "Category field is empty";
                        }else{

                            $query = "Select * FROM status WHERE status_type='" . $cat_title . "'";
                            $select_status_exist = mysqli_query($connection, $query);
                            if(mysqli_fetch_row($select_status_exist)){
                                echo "Data already exist!";
                            }
                            else{

                            $in_query = "INSERT into status(status_type)";
                            $in_query .= "VALUE('{$cat_title}')";

                            $create_category_query = mysqli_query($connection, $in_query);
                            if(!$create_category_query){
                                echo "Query Failed";
                                die('Query Failed' . mysqli_error($connection));
                            }
                            }
                        }


                    }

                    ?>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="cat_title">Add Category</label>
                        <input class="form-control" type="text" name="cat_title" />
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                    </div>
                </form>
                    <?php
                    if(isset($_GET['edit'])){
                        $edit_status_id = $_GET['edit'];
                        include "includes/category_update.php";
                    }
                    ?>

                </div>

                <div class="col-xs-6">

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "Select * FROM status";
                        $select_all_status = mysqli_query($connection, $query);

                        while($row = $select_all_status-> fetch_assoc()){
                            $status_title = $row['status_type'];
                            $status_id = $row['status_id'];
                            echo "<tr>";
                            echo "<td>{$status_id}</td>";
                            echo "<td>{$status_title}</td>";
                            echo "<td><a href='category.php?delete={$status_id}'>Delete</a></td>";
                            echo "<td><a href='category.php?edit={$status_id}'>Edit</a></td>";
                            echo "</tr>";
                        }

                        ?>

                        <?php
                        if(isset($_GET['delete'])){
                            $del_status_id = $_GET['delete'];
                            $query = "Delete from status where status_id ={$del_status_id}";
                            $delete_query = mysqli_query($connection, $query);
                            header("Location: category.php");
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
