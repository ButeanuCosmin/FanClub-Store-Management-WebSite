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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white">
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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white">
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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white">
                    <a class="dropdown-item" href="Register.php">Register</a>
                    <a class="dropdown-item" href="Login.php">Login</a>
                    <a class="dropdown-item" href="Administrator.php">Administrator</a>
                </div>
            </li>

        </ul>
        </ul>
    </div>
</nav>


<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container4">
    <div class="ws_images"><ul>
            <li><img src="data4/images/36157978chelseapictures.jpg" alt="League Champions" title="League Champions" id="wows4_0"/>Last year we won another title , showing the world that we can comeback stronger than ever after a hard season</li>
            <li><a href="http://wowslider.net"><img src="data4/images/chelsea_fc_wallpaper_02.jpg" alt="bootstrap carousel example" title="The Greatest Night" id="wows4_1"/></a>Back in 2012 when we won the most beautiful competiton , Uefa Champions League</li>
            <li><img src="data4/images/20180519t182514z1367464785rc15e1236660rtrmadp3soccerenglandchemun.jpg" alt="Another Trophy" title="Another Trophy" id="wows4_2"/>One week ago we won the FA Cup for the 8th time</li>
        </ul></div>
    <div class="ws_bullets"><div>
            <a href="#" title="League Champions"><span><img src="data4/tooltips/36157978chelseapictures.jpg" alt="League Champions"/>1</span></a>
            <a href="#" title="The Greatest Night"><span><img src="data4/tooltips/chelsea_fc_wallpaper_02.jpg" alt="The Greatest Night"/>2</span></a>
            <a href="#" title="Another Trophy"><span><img src="data4/tooltips/20180519t182514z1367464785rc15e1236660rtrmadp3soccerenglandchemun.jpg" alt="Another Trophy"/>3</span></a>
        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider jquery</a> by WOWSlider.com v8.8</div>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine4/wowslider.js"></script>
<script type="text/javascript" src="engine4/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<h1 style="font-size: xx-large;color: darkblue; padding: 20px"><b>NEWS</b></h1>

<div class="card-group">
    <div class="card" style="padding-left: 20px">
        <div class="card bg-dark text-white">
            <a href="The-Young-Generation.php"><div class="zoom">
                    <img class="card-img" src="imaginiSite/Morris&Brand.jpg" alt="Card Image" height="350">
                    <div class="card-img-overlay">
                    </div>
                    <div class="text-block">
                        <h5 class="card-title" style="font-size: x-large" ><b>The Young Generation</b></h5>
                        <p class="card-text" style="font-size: large"><b>Interview</b></p>
                        <p class="card-text" style="font-size: large"><b>30 May 2018</b></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card" style="padding-left: 20px">
        <div class="card bg-dark text-white">
            <a href="Landmark-Giroud-Goal-in-France.php"><div class="zoom">
                    <img class="card-img" src="imaginiSite/Olivier-Giroud-France-pic.jpg" alt="Card Image">
                    <div class="card-img-overlay">
                    </div>
                    <div class="text-block">
                        <h5 class="card-title" style="font-size: x-large" ><b>Landmark Giroud Goal in France</b></h5>
                        <p class="card-text" style="font-size: large"><b>International</b></p>
                        <p class="card-text" style="font-size: large"><b>28 May 2018</b></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card" style="padding-left: 20px">
        <div class="card bg-dark text-white">
            <a href="Phil-McKnight.php"><div class="zoom">
                    <img class="card-img" src="imaginiSite/Phil-McKnight.jpg" alt="Card Image" height="350">
                    <div class="card-img-overlay">
                    </div>
                    <div class="text-block">
                        <h5 class="card-title" style="font-size: x-large" ><b>PHIL MCKNIGHT: 1924-2018</b></h5>
                        <p class="card-text" style="font-size: large"><b>Club Statements</b></p>
                        <p class="card-text" style="font-size: large"><b>28 May 2018</b></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<h2 style="font-size: xx-large;color: darkblue; padding: 20px"><b>MATCHES</b></h2>
<div class="row" style="padding-left: 20px">
    <div class="jumbotron" style="padding-left: 20px;width: 50%;border-right-style: solid;">
        <p><b>FA CUP  | FINAL WEMBLEY STADIUM </b></p>
        <p>19 MAY 2018, 07:15 PM </p>
        <p><b><img src="imaginiSite/Chelsea.png" style="max-width: 40px; max-height: 40px"> Chelsea </b></p>
        <p style="font-size: large" class="text-center">1-0</p>
        <p><b><img src="imaginiSite/MUTD.png" style="max-width: 40px; max-height: 40px"> Manchester United </b></p>
        <a class="btn btn-primary btn-lg" href="Fixtures.php" role="button">All Results</a>
    </div>
    <div class="jumbotron" style="width: 50%;border-right-style: solid;">
        <h1 class="display-4">Standings</h1>
        <div class="img">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Pos</th>
                    <th scope="col">Team</th>
                    <th scope="col">P</th>
                    <th scope="col">PTS</th>
                </tr>
                </thead>
                <tbody>
                <tr style="background-color: #d0d0d0">
                    <td>1</td>
                    <td><img src="imaginiSite/Manchester_City.png"> Manchester City</td>
                    <td>38</td>
                    <td>100</td>
                </tr>
                <tr style="background-color: #d0d0d0">
                    <td>2</td>
                    <td><img src="imaginiSite/MUTD.png"> Manchester United</td>
                    <td>38</td>
                    <td>81</td>
                </tr>
                <tr style="background-color: #d0d0d0">
                    <td>5</td>
                    <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
                    <td>38</td>
                    <td>70</td>
                </tr>
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg" href="Standings.php" role="button">Full Table</a>
        </div>
    </div>
</div>
<h3 style="font-size: xx-large;color: darkblue; padding-left: 20px"><b>VIDEOS</b>
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container6">
        <div class="ws_images"><ul>
                <li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/yL8h_hBnLzQ?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data6/images/yl8h_hbnlzq.png" alt="" title="" id="wows6_0"/></li>
                <li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/gJMHb3xQVSw?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data6/images/gjmhb3xqvsw.png" alt="" title="" id="wows6_1"/></li>
                <li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/L-b77M_G4Mg?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data6/images/lb77m_g4mg.png" alt="" title="" id="wows6_2"/></li>
                <li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/wocLkz6JlnU?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data6/images/woclkz6jlnu.png" alt="" title="" id="wows6_3"/></li>
                <li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZKU9UMnj6tQ?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data6/images/zku9umnj6tq.png" alt="javascript carousel" title="Googly Penalties! Willian, Pedro & Rudiger take part in hilarious BridgeKids Challenge!" id="wows6_4"/></li>
                <li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/sBGrx6p4jvA?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data6/images/sbgrx6p4jva.png" alt="" title="" id="wows6_5"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title=""><span><img src="data6/tooltips/yl8h_hbnlzq.png" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="data6/tooltips/gjmhb3xqvsw.png" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="data6/tooltips/lb77m_g4mg.png" alt=""/>3</span></a>
                <a href="#" title=""><span><img src="data6/tooltips/woclkz6jlnu.png" alt=""/>4</span></a>
                <a href="#" title="Googly Penalties! Willian, Pedro & Rudiger take part in hilarious BridgeKids Challenge!"><span><img src="data6/tooltips/zku9umnj6tq.png" alt="Googly Penalties! Willian, Pedro & Rudiger take part in hilarious BridgeKids Challenge!"/>5</span></a>
                <a href="#" title=""><span><img src="data6/tooltips/sbgrx6p4jva.png" alt=""/>6</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript slideshow</a> by WOWSlider.com v8.8</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine6/wowslider.js"></script>
    <script type="text/javascript" src="engine6/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
</h3>
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
