<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>College Event Management System</title>
    <style>
        .bgImage {
            background-image: url(images/AdminBuilding.jpg);
            background-size: cover;
            background-position: center center;
            height: 720px;
            margin-bottom: 29px;
        }

        h2 {
            /* margin-top: -10px; */
            margin-top: -1px;
            margin-bottom: 10px;
        }

        .navbar-brand {
            color: white;
        }
    </style>
</head>
<?php require 'utils/styles.php'; ?>
<!--css links. file found in utils folder-->
<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <!--website name/title-->
                <span class="navbar-brand">
                    <h2> College Event Management System </h2>
                </span>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--navigation-->
                <li><a href="adminPage.php"><strong>Home</strong></a></li>
                <li><a href="Stu_details.php"><strong>Student Details</strong></a></li>
                <li><a href="Stu_cordinator.php"><strong>Student Co-ordinator</strong></a></li>
                <li><a href="Staff_cordinator.php"><strong>Staff-Co-ordinator</strong></a></li>
                <li class="btnlogout"><a class="btn btn-default navbar-btn" href="index.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>

            </ul>
        </div>
        <!--container div-->
    </nav>
    <div class="col-md-12">
        <div class="container">
            <div class="jumbotron">
                <!--jumbotron-->
                <!-- <h1><strong>Explore<br></strong> Your Favorite Event</h1> -->
                <!--jumbotron heading-->
                <div class="browse d-md-flex col-md-14">
                    <div class="row">

                    </div>
                </div>
            </div>
</header>