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
                        <th>Order ID</th>
                        <th>Booking ID</th>
                        <th>Refreshment Name</th>
                        <th>Item Count</th>
                        <th>Sub Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "Select * FROM refreshment_orders";
                    $select_all_refreshment = mysqli_query($connection, $query);
                    while($row = $select_all_refreshment-> fetch_assoc()){
                        $ROrder_id = $row['ROrder_id'];
                        $booking_id = $row['booking_id'];
                        $refreshment_id = $row['refreshment_id'];
                        $item_count = $row['item_count'];
                        $sub_total = $row['sub_total'];

                        $query = "Select * FROM Refreshment where Refreshment_id='{$refreshment_id}'";
                        $select_ref_type = mysqli_query($connection, $query);
                        while($row1 = $select_ref_type-> fetch_assoc()){
                            $ref_name = $row1['Refreshment_name'];
                        }

                        echo "<tr>";
                        echo "<td>$ROrder_id</td>";
                        echo "<td>$booking_id</td>";
                        echo "<td>$ref_name</td>";
                        echo "<td>$item_count</td>";
                        echo "<td>$sub_total</td>";
                        echo "</tr>";

                    }

                    ?>
</tbody>

</table>
