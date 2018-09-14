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

                        $lang_name = trim($_POST["lang_name"]);

                        if($lang_name == "" || empty($lang_name)){
                            echo "Language field is empty";
                        }else{

                            $query = "Select * FROM language WHERE Language_name='" . $lang_name . "'";
                            $select_lang_exist = mysqli_query($connection, $query);
                            if(mysqli_fetch_row($select_lang_exist)){
                                echo "Data already exist!";
                            }
                            else{

                            $in_query = "INSERT into language(Language_name)";
                            $in_query .= "VALUE('{$lang_name}')";

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
                        <label for="lang_name">Add Language</label>
                        <input class="form-control" type="text" name="lang_name" />
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Language">
                    </div>
                </form>
                    <?php
                    if(isset($_GET['edit'])){
                        $edit_lang_id = $_GET['edit'];
                        include "includes/language_update.php";
                    }
                    ?>

                </div>

                <div class="col-xs-6">

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Language</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "Select * FROM language";
                        $select_all_lang = mysqli_query($connection, $query);

                        while($row = $select_all_lang-> fetch_assoc()){
                            $lang_name = $row['Language_name'];
                            $lang_id = $row['Language_id'];
                            echo "<tr>";
                            echo "<td>{$lang_id}</td>";
                            echo "<td>{$lang_name}</td>";
                            echo "<td><a href='language.php?edit={$lang_id}'><button type='button' class='btn btn-info' name='edit'>Edit</button></a></td>";
                            echo "<td><a href='language.php?delete={$lang_id}'><button type='button' class='btn btn-danger' name='delete'>Delete</button></a></td>";
                            echo "</tr>";
                        }

                        ?>

                        <?php
                        if(isset($_GET['delete'])){
                            $del_lang_id = $_GET['delete'];
                            $query = "Delete from language where Language_id ={$del_lang_id}";
                            $delete_query = mysqli_query($connection, $query);
                            header("Location: language.php");
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
