<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:54 PM
 */?>

<?php

if(isset($_POST['add_movie'])){
    $movie_name = $_POST['movie_name'];
    $description = $_POST['description'];
    $release_date = date('Y-m-d', strtotime($_POST['release_date']));
    $language = $_POST['language'];
    $duration = date('H:i:s', strtotime($_POST['duration']));
    $search_tags = $_POST['search_tags'];
    $trailer_link = $_POST['trailer_link'];
    $image_name = $_POST['image_name'];
    $status = $_POST['status'];

    $query = "INSERT INTO movies(Movie_name,Description,Release_date,Language_id,Duration,Trailer_Link,Image_name,status_id,search_text)";
    $query .= " Values('{$movie_name}', '{$description}', '{$release_date}', {$language}, '{$duration}', '{$trailer_link}', '{$image_name}', {$status}, {$search_tags})";


    $create_movie_query = mysqli_query($connection, $query);

    confirm($create_movie_query);
    header("Location: movies.php");


}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="movie_name">Movie Name</label>
        <input type="text" class="form-control" name="movie_name">
    </div>
    <div class="form-group">
        <label for="description">Movie Description</label>
        <textarea name="description" cols="40" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="release_date">Release Date</label>
        <input type="date" class="form-control" name="release_date"" />
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
        <input type="time" class="form-control" name="duration" min='01:00' max= '03:00'/>
    </div>
    <div class="form-group">
        <label for="search_tags">Search Tags</label>
        <textarea name="search_tags" cols="40" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="trailer_link">Trailer Link</label>
        <input type="text" class="form-control" name="trailer_link">
    </div>
    <div class="form-group">
        <label for="image_name">Image Name</label>
        <input type="text" class="form-control" name="image_name">
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
        <input class="btn btn-primary" type="submit" name="add_movie" value="Insert Movie"
    </div>
</form>