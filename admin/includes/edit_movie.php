<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/9/2018
 * Time: 5:15 PM
 */?>

<?php

if(isset($_GET['m_id'])){
    $m_id = $_GET['m_id'];
}

    $query = "Select * FROM movies where movie_id={$m_id}";
    $select_all_movies = mysqli_query($connection, $query);
    while($row = $select_all_movies-> fetch_assoc()) {
        $e_movie_id = $row['Movie_id'];
        $e_movie_name = $row['Movie_name'];
        $e_description = $row['Description'];
        $e_release_date = $row['Release_date'];
        $e_language = $row['Language_id'];
        $e_duration = $row['Duration'];
        $e_trailer_link = $row['Trailer_Link'];
        $e_image_name = $row['Image_name'];
        $e_status_id = $row['status_id'];
    }


if(isset($_POST['update_movie'])){
$movie_name = $_POST['movie_name'];
$description = $_POST['description'];
$release_date = date('Y-m-d', strtotime($_POST['release_date']));
$language = $_POST['language'];
$duration = date('H:i:s', strtotime($_POST['duration']));
$trailer_link = $_POST['trailer_link'];
$image_name = $_POST['image_name'];
$status = $_POST['status'];

    $query = "UPDATE movies SET ";
    $query .= "Movie_name='{$movie_name}', ";
    $query .="Description='{$description}',";
    $query .="Release_date='{$release_date}',";
    $query .="Language_id='{$language}',";
    $query .="Duration='{$duration}',";
    $query .="Trailer_Link='{$trailer_link}',";
    $query .="Image_name='{$image_name}',";
    $query .="status_id='{$status}' ";
    $query .= "WHERE movie_id='{$m_id}'";

$update_movie_query = mysqli_query($connection, $query);

confirm($update_movie_query);

    if($update_movie_query){
        header("Location: movies.php");
    }


}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="movie_name">Movie Name</label>
        <input type="text" class="form-control" name="movie_name" value="<?php echo $e_movie_name ?>">
    </div>
    <div class="form-group">
        <label for="description">Movie Description</label>
        <input type="text" class="form-control" name="description" value="<?php echo $e_description ?>">
    </div>
    <div class="form-group">
        <label for="release_date">Release Date</label>
        <input type="date" class="form-control" name="release_date"  value="<?php echo $e_release_date ?>"/>
    </div>
    <div class="form-group">
        <label for="language">Language</label>

        <select name="language" class="form-control">
            <?php
            $query = "select * from language";
            $select_lang_query = mysqli_query($connection, $query);
            confirm($select_lang_query);
            while($row = mysqli_fetch_assoc($select_lang_query)){
                $lang_id = $row['Language_id'];
                $lang_name = $row['Language_name'];
                echo "<option value='$lang_id'>$lang_name</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <input type="time" class="form-control" name="duration" min='01:00' max= '03:00' value="<?php $d_time = date('H:i', strtotime($e_duration)); echo $d_time; ?>"/>
    </div>
    <div class="form-group">
        <label for="trailer_link">Trailer Link</label>
        <input type="text" class="form-control" name="trailer_link" value="<?php echo $e_trailer_link ?>">
    </div>
    <div class="form-group">
        <label for="image_name">Image Name</label>
        <input type="text" class="form-control" name="image_name" value="<?php echo $e_image_name ?>">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <?php
            $query = "select * from status";
            $select_status_query = mysqli_query($connection, $query);
            confirm($select_status_query);
            while($row = mysqli_fetch_assoc($select_status_query)){
                $staus_id1 = $row['status_id'];
                $status_type = $row['status_type'];
                echo "<option value='$staus_id1'>$status_type</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_movie" value="Update Movie"
    </div>
</form>
