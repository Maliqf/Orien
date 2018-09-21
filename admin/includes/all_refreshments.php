<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:42 PM
 */?>

<?php
if(isset($_GET['delete'])){
        $up_ref_id = $_GET['delete'];
        $aval_status = $_GET['a_st'];
        $query = "UPDATE refreshment SET availability='{$aval_status}' where Refreshment_id='{$up_ref_id}'";
        $del_query = mysqli_query($connection, $query);
        header("Location: refreshments.php");
}



?>

<table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Refreshment ID</th>
                        <th>Refreshment Name</th>
                        <th>Refreshment Type</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Availability</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "Select * FROM refreshment";
                    $select_all_refreshment = mysqli_query($connection, $query);
                    while($row = $select_all_refreshment-> fetch_assoc()){
                        $refreshment_id = $row['Refreshment_id'];
                        $refreshment_name = $row['Refreshment_name'];
                        $refreshment_type_id = $row['Refreshment_type_id'];
                        $price = $row['price'];
                        $availability = $row['availability'];
                        $image_name = $row['image_name'];

                        $query = "Select * FROM refreshment_type where refreshment_type_id='{$refreshment_type_id}'";
                        $select_ref_type = mysqli_query($connection, $query);
                        while($row1 = $select_ref_type-> fetch_assoc()){
                            $ref_type = $row1['refreshment_type'];
                        }

                        echo "<tr>";
                        echo "<td>$refreshment_id</td>";
                        echo "<td>$refreshment_name</td>";
                        echo "<td>$ref_type</td>";
                        echo "<td>$price</td>";
                        echo "<td><img width='100' src='../images/refreshment/{$image_name}' alt='{$image_name}'/></td>";

                        if($availability=='Yes'){
                            echo "<td align='center' valign='middle'><a href='refreshments.php?delete={$refreshment_id}&a_st=No'><button type='button' class='btn btn-success' name='delete'>Yes</button></a></td>";
                        }else{
                            echo "<td align='center' valign='middle'><a href='refreshments.php?delete={$refreshment_id}&a_st=Yes'><button type='button' class='btn btn-danger' name='delete'>No</button></a></td>";
                        }
                        echo "<td align='center' valign='middle'><a href='refreshments.php?source=edit_refreshment&r_id={$refreshment_id}'><button type='button' class='btn btn-info' name='edit'>Edit</button></a></td>";
                        echo "</tr>";

                    }

                    ?>
</tbody>

</table>
