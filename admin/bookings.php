<?php include "includes/head.php"?>

<?php include "includes/navigation.php"?>

<?php
if(isset($_GET['cancel'])){
    $cancel_id = $_GET['cancel'];
    $query = "UPDATE bookings SET status='Cancel' where booking_id='{$cancel_id}'";
    $del_query = mysqli_query($connection, $query);
    header("Location: bookings.php");
}



?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin Orien Cinema
                    <small>Author</small>
                </h1>

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Show ID</th>
                        <th>User Name</th>
                        <th>Booked Date</th>
                        <th>Ticket Count</th>
                        <th>Refreshment Ordered</th>
                        <th>Total Amount</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "Select * FROM bookings where status='Active'";
                    $select_all_bookings = mysqli_query($connection, $query);
                    while($row = $select_all_bookings-> fetch_assoc()){
                        $booking_id = $row['Refreshment_id'];
                        $show_id = $row['show_id'];
                        $user_id = $row['user_id'];
                        $booked_date = $row['booked_date'];
                        $ticket_count = $row['ticket_count'];
                        $refreshment_booked = $row['refreshment_booked'];
                        $total_amount = $row['total_amount'];

                        $query = "Select * FROM users where user_id='{$User_id}'";
                        $select_user = mysqli_query($connection, $query);
                        while($row1 = $select_user-> fetch_assoc()){
                            $user_name = $row1['User_name'];
                        }

                        echo "<tr>";
                        echo "<td>$booking_id</td>";
                        echo "<td>$show_id</td>";
                        echo "<td>$user_name</td>";
                        echo "<td>$booked_date</td>";
                        echo "<td>$ticket_count</td>";
                        echo "<td>$refreshment_booked</td>";
                        echo "<td>$total_amount</td>";
                        echo "<td align='center' valign='middle'><a href='bookings.php?cancel={$booking_id}><button type='button' class='btn btn-danger' name='cancel'>Cancel</button></a></td>";                        echo "</tr>";

                    }

                    ?>
                    </tbody>

                </table>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


<?php include "includes/foot.php"?>
