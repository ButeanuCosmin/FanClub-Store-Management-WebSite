<?php

$db = mysqli_connect("localhost", "root", "", "site");


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Chelsea FC</title>

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine4/style.css" />
    <script type="text/javascript" src="engine4/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    </script-->	<script src="https://www.youtube.com/iframe_api"></script>

    <!-- End WOWSlider.com HEAD section -->
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine6/style.css" />
    <!--script type="text/javascript" src="engine6/jquery.js"></script-->	<script src="https://www.youtube.com/iframe_api"></script>

    <!-- End WOWSlider.com HEAD section --></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="Home.php"><img src="imaginiSite/Chelsea.png" class="icon" alt="icon"> CHELSEA FC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="News.php">News<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teams
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="First%20Team.php">First Team</a>
                    <a class="dropdown-item" href="Developement%20Squad.php">Developement Squad</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Under-18%20Team.php">Under-18 Team</a>
                    <a class="dropdown-item" href="Ladies%20Team.php">Ladies Team</a>
                    <a class="dropdown-item" href="Management.php">Management</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Results
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Fixtures.php">Fixtures</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Standings.php">Standings</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav pull-sm-right" style="padding-right: 60px">
            <a class="nav-link" href="http://localhost/Fotbal/magazin.php" >Shop<span class="sr-only">(current)</span></a>

        </ul>
        <ul class="navbar-nav pull-sm-right" style="padding-right: 60px">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign Up
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Register.php">Register</a>
                    <a class="dropdown-item" href="Login.php">Login</a>
                    <a class="dropdown-item" href="Administrator.php">Administrator</a>
                </div>
            </li>

        </ul>
        </ul>
    </div>
</nav>



<h1 style="font-size: xx-large;color: darkblue; padding-left: 20px; padding-top: 20px"><b>GOALKEEPERS</b></h1>
<div class="card-group">

            <?php



            $rezultat = mysqli_query($db, "SELECT * FROM first_team WHERE Position ='Goalkeeper'");

            while($row = mysqli_fetch_array($rezultat))
            {

                ?>



                <div class="card" style="padding-left: 20px">
                    <div class="card bg-dark text-white">
                        <div class="zoom">
                            <img class="card-img" src="imaginiSite/<?php echo $row['Photo']; ?>" alt="Card Image">
                            <div class="card-img-overlay">
                            </div>
                            <div class="text-block">
                                <h5 class="card-title" style="font-size: x-large" ><b><?php echo $row["Name"]; ?></b></h5>
                                <p class="card-text" style="font-size: large"><b><?php echo $row["Number"]; ?></b></p>
                                <p class="card-text" style="font-size: large"><b><?php echo $row["Country"]; ?></b></p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

            }

            ?>

        </div>

<h1 style="font-size: xx-large;color: darkblue; padding-left: 20px; padding-top: 20px"><b>DEFENDERS</b></h1>

<div class="card-group">
    <div class="row mb-3">
    <?php



    $rezultat = mysqli_query($db, "SELECT * FROM first_team WHERE Position ='Defender'");

    while($row = mysqli_fetch_array($rezultat))
    {

        ?>



        <div class="card" style="padding-left: 20px; width: 33%">
            <div class="card bg-dark text-white">
                <div class="zoom">
                    <img class="card-img" src="imaginiSite/<?php echo $row['Photo']; ?>" alt="Card Image" height="485">
                    <div class="card-img-overlay">
                    </div>
                    <div class="text-block">
                        <h5 class="card-title" style="font-size: x-large" ><b><?php echo $row["Name"]; ?></b></h5>
                        <p class="card-text" style="font-size: large"><b><?php echo $row["Number"]; ?></b></p>
                        <p class="card-text" style="font-size: large"><b><?php echo $row["Country"]; ?></b></p>
                    </div>
                </div>
            </div>
        </div>

        <?php

    }

    ?>

</div>
</div>



<h1 style="font-size: xx-large;color: darkblue; padding-left: 20px; padding-top: 20px"><b>MIDFIELDERS</b></h1>

<div class="card-group">
    <div class="row mb-3">
        <?php



        $rezultat = mysqli_query($db, "SELECT * FROM first_team WHERE Position ='Midfielder'");

        while($row = mysqli_fetch_array($rezultat))
        {

            ?>



            <div class="card" style="padding-left: 20px; width: 33%">
                <div class="card bg-dark text-white">
                    <div class="zoom">
                        <img class="card-img" src="imaginiSite/<?php echo $row['Photo']; ?>" alt="Card Image" height="485">
                        <div class="card-img-overlay">
                        </div>
                        <div class="text-block">
                            <h5 class="card-title" style="font-size: x-large" ><b><?php echo $row["Name"]; ?></b></h5>
                            <p class="card-text" style="font-size: large"><b><?php echo $row["Number"]; ?></b></p>
                            <p class="card-text" style="font-size: large"><b><?php echo $row["Country"]; ?></b></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php

        }

        ?>

    </div>
</div>






<h1 style="font-size: xx-large;color: darkblue; padding-left: 20px; padding-top: 20px"><b>FORWARDS</b></h1>

<div class="card-group">
    <div class="row mb-3">
        <?php



        $rezultat = mysqli_query($db, "SELECT * FROM first_team WHERE Position ='Forward'");

        while($row = mysqli_fetch_array($rezultat))
        {

            ?>



            <div class="card" style="padding-left: 20px; width: 49%">
                <div class="card bg-dark text-white">
                    <div class="zoom">
                        <img class="card-img" src="imaginiSite/<?php echo $row['Photo']; ?>" alt="Card Image" height="485">
                        <div class="card-img-overlay">
                        </div>
                        <div class="text-block">
                            <h5 class="card-title" style="font-size: x-large" ><b><?php echo $row["Name"]; ?></b></h5>
                            <p class="card-text" style="font-size: large"><b><?php echo $row["Number"]; ?></b></p>
                            <p class="card-text" style="font-size: large"><b><?php echo $row["Country"]; ?></b></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php

        }

        ?>

    </div>
</div>



<footer id="myFooter">
    <div class="container">
        <ul>
            <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
        </ul>
    </div>

    <div class="footer-social">
        <a href="https://www.nike.com/gb/en_gb/c/chelsea-fc?CP=EUNS_CHELSEAREF_BANNER_ECOM_SP18_TESTSITE_HEADER_SWOOSH"><img src="imaginiSite/Nike.png" style="display: inline max-width: 60px; max-height: 60px;"></a>
        <a href="https://www.yokohama.co.uk/" ><img src="imaginiSite/Yokohama.png" style="display: inline max-width: 100px; max-height: 100px; "  ></a>
        <a href="http://www.carabaoenergy.co.uk/"><img src="imaginiSite/Carabao.png" style="display: inline max-width: 100px; max-height: 100px;" ></a>
        <a href="https://www.beatsbydre.com/uk/"><hr><img src="imaginiSite/Beats.png" style="  max-width: 90px; max-height: 90px;"></hr></a>
        <a href="https://www.delta.com/index.jsp"><img  src="imaginiSite/Delta.png" style="  max-width: 90px; max-height: 90px; padding-left: 20px;padding-right: 20px;" ></a>
        <a href="https://www.easports.com/uk/fifa/buy/UK"><img src="imaginiSite/EA_Sports.png" style="max-width: 90px; max-height: 90px; padding-left: 20px;padding-right: 20px "></a>
        <a href="https://www.sonymusic.com/"><img src="imaginiSite/Sony_Music.png" style="max-width: 90px; max-height: 90px;padding-left: 20px;padding-right: 20px "></a>
        <a href="https://www.ericsson.com/en"><img src="imaginiSite/Ericsson.png" style="max-width: 90px; max-height: 90px; padding-left: 20px;padding-right: 20px "></a>
        <a href="https://www.hublot.com/en/partnerships/chelsea-fc?utm_source=chelsea&utm_medium=site&utm_campaign=official-timekeeper"><img src="imaginiSite/Hublot.png" style="max-width: 90px; max-height: 90px; padding-left: 20px;padding-right: 20px "></a>
        <a href="http://sports.williamhill.com/bet/en-gb/betting/y/5/Football.html"><img src="imaginiSite/William-Hill.png" style="max-width: 90px; max-height: 90px; padding-left: 20px;padding-right: 20px "></a>
        <a href="https://www.wipro.com/"><img src="imaginiSite/Wipro.png" style="max-width: 90px; max-height: 90px; padding-left: 20px;padding-right: 20px "></a>
    </div>
</footer>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>

</body>
</html>
