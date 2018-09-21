<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/16/2018
 * Time: 8:31 PM
 */?>

<?php
if(isset($_POST['search'])){
    $search_text = $_POST['search'];
    $movie_id = "";

    $query = "Select * FROM movies where search_text LIKE '%$search_text%'";
    $select_search = mysqli_query($connection, $query);
    confirm($select_search);
    while($row = $select_search-> fetch_assoc()){
        $movie_id = $row['Movie_id'];
    }

    if($movie_id!=""){
    header("Location: index.php?m_id=$movie_id");}else{
        header("Location: index.php");
    }

}
?>

<div class="search-section">
    <form action="" method="post">

    <!--<span class="__icon search-icon"><img id="search_icon" src="assets/Search.jpg"  height="15" width="15"/></span>
    <input type="text" class="search-box typeahead" placeholder="Search for Movies" id="input-search-box" onfocus="">-->
    <div class="input-group"><input type="text" name="search" class="search-box typeahead" placeholder="Search for Movies"><span class="input-group-btn"><button class="btn btn-default" name="submit" type="submit" style="padding: 12px 20px;"><span class="glyphicon glyphicon-search"></span></button></span></div>
    </form>

</div>
