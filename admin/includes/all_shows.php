<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:42 PM
 */?>

<table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Show ID</th>
                        <th>Movie Name</th>
                        <th>Hall Name</th>
                        <th>Show Time</th>
                        <th>Date From</th>
                        <th>Date To</th>
                        <th>Show End</th>
                        <th>Available Seats</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "Select * FROM film_shows";
                    $select_all_shows = mysqli_query($connection, $query);
                    while($row = $select_all_shows-> fetch_assoc()){
                        $show_id = $row['show_id'];
                        $movie_id = $row['Movie_id'];
                        $Hall_id  = $row['Hall_id'];
                        $Show_time_id = $row['Show_time_id'];
                        $Date_from = $row['Date_from'];
                        $Date_to = $row['Date_to'];
                        $Show_end = $row['Show_end'];
                        $Available_seats = $row['Available_seats'];

                        $query = "Select * FROM movies where movie_id='{$movie_id}'";
                        $select_movie_name = mysqli_query($connection, $query);
                        while($row1 = $select_movie_name-> fetch_assoc()){
                            $movie_name = $row1['Movie_name'];
                        }

                        $query = "Select * FROM halls where hall_id='{$Hall_id}'";
                        $select_hall = mysqli_query($connection, $query);
                        while($row1 = $select_hall-> fetch_assoc()){
                            $hall_name = $row1['Hall_name'];
                        }

                        $query = "Select * FROM show_times where show_time_id='{$Show_time_id}'";
                        $select_show_time = mysqli_query($connection, $query);
                        while($row1 = $select_show_time-> fetch_assoc()){
                            $show_time = $row1['show_time'];
                        }

                        echo "<tr>";
                        echo "<td>$show_id</td>";
                        echo "<td>$movie_name</td>";
                        echo "<td>$hall_name</td>";
                        echo "<td>$show_time</td>";
                        echo "<td>$Date_from</td>";
                        echo "<td>$Date_to</td>";
                        echo "<td>$Show_end</td>";
                        echo "<td>$Available_seats</td>";
                        echo "<td align='center' valign='middle'><a href='shows.php?source=edit_show&s_id={$show_id}'><button type='button' class='btn btn-info' name='edit'>Edit</button></a></td>";
                        echo "</tr>";

                    }

                    ?>
</tbody>

</table>
