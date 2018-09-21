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
        $e_search_tags = $row['search_text'];
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
    $search_tags = $_POST['search_tags'];
    $trailer_link = $_POST['trailer_link'];
    $image_name = $_POST['image_name'];
    $status = $_POST['status'];

    $query = "UPDATE movies SET ";
    $query .= "Movie_name='{$movie_name}', ";
    $query .="Description='{$description}',";
    $query .="Release_date='{$release_date}',";
    $query .="Language_id='{$language}',";
    $query .="Duration='{$duration}',";
    $query .="search_text='{$search_tags}',";
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
        <textarea name="description" cols="40" rows="5" class="form-control"><?php echo $e_description ?></textarea>
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
                if($e_language === $lang_id){
                    echo "<option value='$lang_id' selected>$lang_name</option>";
                }else{
                    echo "<option value='$lang_id'>$lang_name</option>";
                }                
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <input type="time" class="form-control" name="duration" min='01:00' max= '03:00' value="<?php $d_time = date('H:i', strtotime($e_duration)); echo $d_time; ?>"/>
    </div>
    <div class="form-group">
        <label for="search_tags">Search Tags</label>
        <textarea name="search_tags" cols="40" rows="5" class="form-control"><?php echo $e_search_tags ?></textarea>
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
                if($e_status_id === $staus_id1){
                    echo "<option value='$staus_id1' selected>$status_type</option>";
                }else{
                    echo "<option value='$staus_id1'>$status_type</option>";
                } 
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_movie" value="Update Movie"
    </div>
</form>
