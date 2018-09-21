<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 8:11 AM
 */?>

<div class="page-content-wrapper ">
    <div class="content-wrapper">
        <div class="movies-landing">
            <div class="mv-type-selection">
                <div class="tab-content-wrapper _active" id="now-showing" name="now-showing">
                    <section class="now-showing filter-now-showing">
                        <div class="row">
                            <div class="listing-section">
                                <div class="listing-sidebar">
                                    <?php include "profile_sidebar.php"?>

                                    <!--Language Selection start-->
                                    <div id="ns-lang" class="filetr-widget slideUp">
                                        <div class="widget-title ns-title-wid">
                                            <h3>Select Language</h3>
                                        </div>
                                        <div class="filter-list">
                                            <ul class="language __filter-list">
                                                <?php
                                                $query = "Select * FROM language";
                                                $select_all_lang = mysqli_query($connection, $query);

                                                while($row = $select_all_lang-> fetch_assoc()){
                                                    $lang_name = $row['Language_name'];
                                                    $lang_id = $row['Language_id'];
                                                    echo "<li class='__filter'>
                                                    <span class='__checkbox'>
                                                    <input type='checkbox' value='{$lang_name}' id='{$lang_name}' class='tick'> <span class='checkbox-label'><a class='_anchor-filter' href=''>{$lang_name}</a></span>
                                                    </span>
                                                    </li>
                                                    ";
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Language Selection End-->

                                    <!--Genre Selection start slideUp/slideDown-->
                                    <div id="ns-gen" class="filetr-widget slideUp">
                                        <div class="widget-title ns-genre-title">
                                            <h3>Genre</h3>
                                        </div>
                                        <div class="filter-list">
                                            <ul class="genre __filter-list ">
                                                <li class="__filter">
<span data-filter="action" class="__checkbox">
<input type="checkbox" value="Action"> <span class="checkbox-label"><a class="_anchor-filter" href="">Action</a></span>
</span>
                                                </li>													<!-- <span class="__more-filters"> + More</span> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Genre Selection End-->
                                </div>

                                <!--Tile View Start-->
                                <div class="card-listing-section">
                                    <div class="cards-list">
                                        <div class="__col-now-showing">
                                            <div class="mv-row">

                                                <?php
                                                $query = "Select * FROM movies where status_id='1'";
                                                $select_all_movie = mysqli_query($connection, $query);

                                                while($row = $select_all_movie-> fetch_assoc()){
                                                    $movie_name = $row['Movie_name'];
                                                    $movie_id = $row['Movie_id'];
                                                    $m_lang = $row['Language_id'];
                                                    $m_img_name = $row['Image_name'];

                                                $query = "Select * FROM language where language_id='{$m_lang}'";
                                                $select_all_lang = mysqli_query($connection, $query);

                                                while($row1 = $select_all_lang-> fetch_assoc()) {
                                                    $m_lang_name = $row1['Language_name'];
                                                }


                                                    echo "
                                                    <div class='card-container wow fadeIn movie-card-container movie-tamil' data-language-filter='|{$m_lang_name}' data-genre-filter='|Romance|Thriller' style='visibility: visible; animation-name: fadeIn;'>
                                                    <div class='cards'>
                                                        <div class='card-img'>";
                                                        if(file_exists("images/thumb/{$m_img_name}")){
                                                            echo "<img class='__poster __animated' src='images/thumb/{$m_img_name}' alt='{$movie_name}'/>";
                                                        }else{
                                                            echo "<img class='__poster __animated' src='images/thumb/default.jpg' alt='{$movie_name}'/>";
                                                        }



                                                        echo "</div>
                                                        <div class='card-details lang-eng'>
                                                            <div class='card-left'>
                                                                <div class='popularity sa-data-plugin' data-event-group='EG00029395' data-event-code='ET00047631' data-coming-soon='false'>

                                                                </div>
                                                            </div>
                                                            <div class='card-right'>
                                                                <div class='card-title'>
                                                                    <h4>{$movie_name}</h4>
                                                                </div>
                                                                <div class='card-tag'>
                                                                    <span><li class='__language'>{$m_lang_name}</li></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </div>
                                                    ";
                                                }
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                    <!--Tile View End-->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
