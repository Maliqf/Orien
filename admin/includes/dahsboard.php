<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/15/2018
 * Time: 9:15 AM
 */?>


<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-film fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query = "SELECT * FROM movies";
                        $select_all_movies = mysqli_query($connection, $query);
                        $movie_count = mysqli_num_rows($select_all_movies);
                        echo "<div class='huge'>{$movie_count}</div>";
                        ?>
                        <div>Movies</div>
                    </div>
                </div>
            </div>
            <a href="movies.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-play fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query = "SELECT * FROM film_shows";
                        $select_all_film_shows = mysqli_query($connection, $query);
                        $film_shows_count = mysqli_num_rows($select_all_film_shows);
                        echo "<div class='huge'>{$film_shows_count}</div>";
                        ?>
                        <div>Shows</div>
                    </div>
                </div>
            </div>
            <a href="film_shows.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query = "SELECT * FROM users";
                        $select_all_users = mysqli_query($connection, $query);
                        $user_count = mysqli_num_rows($select_all_users);
                        echo "<div class='huge'>{$user_count}</div>";
                        ?>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query = "SELECT * FROM bookings";
                        $select_all_bookings = mysqli_query($connection, $query);
                        $bookings_count = mysqli_num_rows($select_all_bookings);
                        echo "<div class='huge'>{$bookings_count}</div>";
                        ?>
                        <div>Bookings</div>
                    </div>
                </div>
            </div>
            <a href="bookings.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
