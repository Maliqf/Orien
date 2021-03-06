<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 10:40 AM
 */?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Orien Cinema</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../images/profile/mq.jpg" width="30" height="30" style="border-radius: 50%"/>
            <!--<i class="fa fa-user">--></i> <?php echo ucfirst($_SESSION['user_name']);?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../include/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="language.php"><i class="fa fa-fw fa-language"></i> Languages</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#movies"><i class="fa fa-fw fa-film"></i> Movies <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="movies" class="collapse">
                    <li>
                        <a href="movies.php">View Movies</a>
                    </li>
                    <li>
                        <a href="movies.php?source=add_movie">Add Movies</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="users.php"><i class="fa fa-fw fa-user"></i> Users</a>
            </li>
            <li>
                <a href="halls.php"><i class="fa fa-fw fa-building"></i> Film Halls</a>
            </li>
            <li>
                <a href="show_times.php"><i class="fa fa-fw fa-clock-o"></i> Show Time</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#shows"><i class="fa fa-fw fa-play"></i> Film Shows <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="shows" class="collapse">
                    <li>
                        <a href="shows.php">View Shows</a>
                    </li>
                    <li>
                        <a href="shows.php?source=add_show">Add Shows</a>
                    </li>
                </ul>
            </li>
            <!--<li>
                <a href="#"><i class="fa fa-fw fa-wheelchair"></i> Seat Price</a>
            </li>-->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#refreshments"><i class="fa fa-fw fa-coffee"></i> Refreshments <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="refreshments" class="collapse">
                    <li>
                        <a href="refreshments.php?source=refreshment_orders">View Orders</a>
                    </li>
                    <li>
                        <a href="refreshments.php">View Refreshments</a>
                    </li>
                    <li>
                        <a href="refreshments.php?source=add_refreshment">Add Items</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="bookings.php"><i class="fa fa-fw fa-money"></i> Manage Bookings</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
