<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:42 PM
 */?>

<?php
if(isset($_GET['delete'])){
        $del_movie_id = $_GET['delete'];
        $query = "UPDATE movies SET status_id=2 where movie_id='{$del_movie_id}'";
        $del_query = mysqli_query($connection, $query);
        header("Location: movies.php");
}



?>

<table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Movie ID</th>
                        <th>Movie Name</th>
                        <th>Description</th>
                        <th>Release Date</th>
                        <th>Language</th>
                        <th>Duration</th>
                        <th>Trailer Link</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "Select * FROM movies where status_id=1";
                    $select_all_movies = mysqli_query($connection, $query);
                    while($row = $select_all_movies-> fetch_assoc()){
                        $movie_id = $row['Movie_id'];
                        $movie_name = $row['Movie_name'];
                        $description = $row['Description'];
                        $release_date = $row['Release_date'];
                        $language = $row['Language_id'];
                        $duration = $row['Duration'];
                        $trailer_link = $row['Trailer_Link'];
                        $image_name = $row['Image_name'];
                        $status_id = $row['status_id'];

                        $query = "Select * FROM language where Language_id='{$language}'";
                        $select_lang_type = mysqli_query($connection, $query);
                        while($row1 = $select_lang_type-> fetch_assoc()){
                            $language = $row1['Language_name'];
                        }

                        $query = "Select * FROM status where status_id='{$status_id}'";
                        $select_status = mysqli_query($connection, $query);
                        while($row1 = $select_status-> fetch_assoc()){
                            $status_id = $row1['status_type'];
                        }

                        echo "<tr>";
                        echo "<td>$movie_id</td>";
                        echo "<td>$movie_name</td>";
                        echo "<td>$description</td>";
                        echo "<td>$release_date</td>";
                        echo "<td>$language</td>";
                        echo "<td>$duration</td>";
                        echo "<td><a href='{$trailer_link}' target='_blank'>$trailer_link</a></td>";
                        echo "<td><img width='100' src='../images/thumb/{$image_name}' alt='{$image_name}'/><br/><br/><img width='100' src='../images/cover/{$image_name}' alt='{$image_name}'/></td>";
                        echo "<td>$status_id</td>";
                        echo "<td align='center' valign='middle'><a href='movies.php?source=edit_movie&m_id={$movie_id}'><button type='button' class='btn btn-info' name='edit'>Edit</button></a></td>";
                        echo "<td align='center' valign='middle'><a href='movies.php?delete={$movie_id}'><button type='button' class='btn btn-danger' name='delete'>Delete</button></a></td>";
                        echo "</tr>";

                    }

                    ?>
</tbody>

</table>
