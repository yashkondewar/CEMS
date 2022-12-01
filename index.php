<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>College Event Management</title>
    <?php require 'utils/styles.php'; ?>
</head>

<body>
    <?php require 'utils/header.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <!--body content holder-->
        <div class="container">
            <div class="col-md-12">
                <!--body content title holder with 12 grid columns-->
                <h1 style="color:#000080 ; font-size:42px ; font-style:bold ; text-align: center; "><strong> Register For The Events </strong></h1>
                <!--body content title-->
            </div>

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <!--technical content-->
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <!--image holder with 6 grid columns-->
                            <img style="margin-left: 150px;" src="images/Pragyaa.jpeg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <!--Text holder with 6 column grid-->

                            <h1 style="color:#003300; font-size:38px;text-align :center;"><u><strong>Technical Events</strong></u></h1>
                            <!--title-->
                            <p>
                                <!--content-->
                                PRAGYAA, A national level technical fiesta of SGGSIE&T, Nanded organized every year to provide a platform for students to show their excellence in techno-social competitions. Each year we have a constructive theme working for the welfare of society & technology. Students come in huge numbers to participate in the multitude of events ranging from the brainstorming junior scientist to the bewildering robotics and get a chance to delve into a variety of exhibits. We aim at focusing on excellence of technology for human welfare and add a new dimension to success of our extravaganza every year so that it will reach the height of its glory.
                            </p>

                            <br><br>
                            <?php $id = 1;
                            echo
                            '<a class="btn btn-default"  href="viewEvent.php?id=' . $id . '"> 
                            <span class="glyphicon glyphicon-circle-arrow-right">&nbsp;</span>View Technical Events</a>'
                            ?>
                        </div>
                        <!--subcontent div-->
                    </div>
                    <!--container div-->
                </section>
            </div>
            <!--row div-->

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <!--image holder with 6 grid columns-->
                            <img src="images/Rmageddon.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <!--Text holder with 6 column grid-->
                            <h1 style="color:#003300; font-size:38px; text-align: center;"><strong><u>Robotics Events</u></strong></h1>
                            <!--title-->
                            <p>
                                <!--content-->
                                RNXG (Robotics For Next Generation) is the robotics club of our College. Where we counduct Rmageddon event to enhance and improve innovation and ideas of the College students. In Rmageddon various sub events are conducted like line follower bot, picking and throwing bot, Robo-wars, DPDT bots, and car racing competitions. Various students form various colleges of Maharashatra come and compete here and win exciting prizes.
                            </p>

                            <br><br>
                            <?php
                            $id = 2;
                            echo
                            '<a class="btn btn-default" href="viewEvent.php?id=' . $id . '"> <span class="glyphicon glyphicon-circle-arrow-right">&nbsp;</span>View Robotics Events</a>'
                            ?>
                        </div>
                        <!--subcontent div-->
                    </div>
                    <!--container div-->
                </section>
            </div>
            <!--row div-->

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <!--image holder with 6 grid columns-->
                            <img src="images/utsav_SGGS.JPG" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <!--Text holder with 6 column grid-->
                            <h1 style="color:#003300; font-size:38px; text-align: center;"><strong><u>Utsav</strong></u></h1>
                            <!--title-->
                            <p>
                                <!--content-->
                                Utsav is an official event of our College for counducting on-stage performances. In this event various on-stage activites are counducted in this event like Dancing, Singing, Drama etc. In this event various actors and celebrities are invited. Students enjoy this event with a lot of joy.
                            </p>

                            <br><br>
                            <?php
                            $id = 3;
                            echo
                            '<a class="btn btn-default" href="viewEvent.php?id=' . $id . '"> <span class="glyphicon glyphicon-circle-arrow-right">&nbsp;</span>View Utsav Events</a>'
                            ?>
                        </div>
                        <!--subcontent div-->
                    </div>
                    <!--container div-->
                </section>
            </div>
            <!--row div-->

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <!--image holder with 6 grid columns-->
                            <img src="images/Zenith.jpeg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <!--Text holder with 6 column grid-->
                            <h1 style="color:#003300; font-size:38px; text-align: center;"><strong><u> Sports Event </u></strong></h1>
                            <!--title-->
                            <p>
                                <!--content-->
                                After the grand success of ZENITH'20 & ZENITH'21, We are back with ZENITH'22 - the 7th edition of our fiesta. This year the tagline is "Let Sports Ignite The Spark!!!". Last year this Sports extravaganza was scheduled in the month of February 2021 and was organised online . There were many games that included Workout Wonders, NBA Live , Carrom Disc Pool, Free Style Football, Sports Quiz at intercollegiate levels and table tennis, chess, football, rink football, volleyball, kabaddi, cricket, basketball, handball, yoga,tug of war, ahtletics at intra-collegiate levels. With the sport activities we conducted some social activites like orphanage activities, "run for health" (dream marathon). Prizes worth over 4.5 lakhs were awarded in the previous edition of ZENITH. The intercollegiate fiesta ZENITH'20 & ZENITH'21 competed among various Engineering colleges across the state.
                            </p>
                            <br><br><br>
                            <?php
                            $id = 4;
                            echo
                            '<a class="btn btn-default" href="viewEvent.php?id=' . $id . '"> <span class="glyphicon glyphicon-circle-arrow-right">&nbsp;</span>View Sports Events</a>'
                            ?>
                        </div>
                        <!--subcontent div-->
                    </div>
                    <!--container div-->
                </section>
            </div>
            <!--row div-->
        </div>
        <!--body content div-->

        <?php require 'utils/footer.php'; ?>
        <!--footer content. file found in utils folder-->
</body>

</html>