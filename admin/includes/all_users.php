<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:42 PM
 */?>

<?php
if(isset($_GET['delete'])){
        $del_user_id = $_GET['delete'];
        $query = "UPDATE users SET user_status_id=2 where User_id='{$del_user_id}'";
        $del_query = mysqli_query($connection, $query);
        header("Location: users.php");
}



?>

<table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Join Date</th>
                        <th>City</th>
                        <th>Royalty Points</th>
                        <th>Subscription</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Profile Picture</th>
                        <th>User Type</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "Select * FROM users where user_status_id=1";
                    $select_all_movies = mysqli_query($connection, $query);
                    while($row = $select_all_movies-> fetch_assoc()){
                        $user_id = $row['User_id'];
                        $user_name = $row['User_name'];
                        $email = $row['Email'];
                        $phone = $row['Phone'];
                        $join_date = $row['Joint_date'];
                        $city = $row['City'];
                        $Royalty_Points = $row['Royalty_Points'];
                        $Subscription = $row['Subscription'];
                        $Gender = $row['Gender'];
                        $DOB = $row['DOB'];
                        $Profile_pic = $row['Profile_pic'];
                        $user_type_id = $row['user_type_id'];

                        echo "<tr>";
                        echo "<td>$user_id</td>";
                        echo "<td>$user_name</td>";
                        echo "<td>$email</td>";
                        echo "<td>$phone</td>";
                        echo "<td>$city</td>";
                        echo "<td>$join_date</td>";
                        echo "<td>$Royalty_Points</td>";
                        echo "<td>$Subscription</td>";
                        echo "<td>$Gender</td>";
                        echo "<td>$DOB</td>";
                        echo "<td><img width='50' height='50' style='border-radius:50%;' src='../images/profile/{$Profile_pic}' alt='{$Profile_pic}'/></td>";
                        echo "<td>$user_type_id</td>";
                        echo "<td align='center' valign='middle'><a href='users.php?source=edit_user&u_id={$user_id}'><button type='button' class='btn btn-info' name='edit'>Edit</button></a></td>";
                        echo "<td align='center' valign='middle'><a href='users.php?delete={$user_id}'><button type='button' class='btn btn-danger' name='delete'>Delete</button></a></td>";
                        echo "</tr>";

                    }

                    ?>
</tbody>

</table>
