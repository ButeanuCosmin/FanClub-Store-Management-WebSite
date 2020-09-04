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



<div class="img">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Competition</th>
            <th scope="col">Home</th>
            <th scope="col">Away</th>
            <th scope="col">Result</th>
            <th scope="col">Scorers</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup | Final</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Manchester_United.jpg"> Manchester United</td>
            <td>1-0</td>
            <td>Hazard (pen) 22' </td>
            <td>19 May 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Newcastle_United.png"> Newcastle United</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>3-0</td>
            <td>Gayle 23' , Ayoze Perez 59' 63' / </td>
            <td>13 May 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Huddersfield.png"> Huddersfield Town</td>
            <td>1-1</td>
            <td>Alonso 62' / Depoitre 50' </td>
            <td>09 May 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Liverpool.png"> Liverpool</td>
            <td>1-0</td>
            <td>Olivier Giroud 32' /  </td>
            <td>06 May 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Swansea_City.png"> Swansea City</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-1</td>
            <td> / Fabregas 4' </td>
            <td>28 Apr 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Southampton.png"> Southampton</td>
            <td>2-0</td>
            <td>Olivier Giroud 46' , Morata 82'/ </td>
            <td>22 Apr 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Burnley.png"> Burnley</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-2</td>
            <td>Barnes 64' / Long (OG) 20' , Moses 69' </td>
            <td>19 Apr 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Southampton.png"> Southampton</td>
            <td>2-3</td>
            <td>Tadic 21' , Bednarek 60' / Olivier Giroud 70' 78' , Hazard 75' </td>
            <td>14 Apr 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/west-ham.png"> West Ham United</td>
            <td>1-1</td>
            <td>Azpilicueta 36' / Chicharito 73' </td>
            <td>08 Apr 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Tottenham.png"> Tottenham Hotspur</td>
            <td>1-3</td>
            <td>Morata 30' / Eriksen 45+1' , Dele Alli 62' 66' </td>
            <td>01 Apr 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup</td>
            <td><img src="imaginiSite/Leicester.png"> Leicester City</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-2</td>
            <td>Vardy 76' / Morata 42' , Pedro 105' </td>
            <td>18 Mar 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Barcelona.jpg"> Barcelona</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>3-0 (agg 4-1) </td>
            <td> Messi 3' 63' , Dembele 20'/ </td>
            <td>14 Mar 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Crystal_Palace.png"> Crystal Palace</td>
            <td>2-1</td>
            <td>Willian 25' , Kelly (OG) 32' / van Aanholt 90' </td>
            <td>10 Mar 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Manchester_City.png"> Manchester City</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-0</td>
            <td>Bernardo Silva 46' / </td>
            <td>04 Mar 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Manchester_United.jpg"> Manchester United</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>2-1</td>
            <td>Lukaku 39' , Lingard 75' / Willian 32' </td>
            <td>25 Feb 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Barcelona.jpg"> Barcelona</td>
            <td>1-1</td>
            <td>Willian 62' / Messi 75' </td>
            <td>20 Feb 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Hull_City.png"> Hull City</td>
            <td>4-0</td>
            <td>Willian 2' 32' , Pedro 27' , Olivier Giroud 42' / </td>
            <td>16 Feb 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/WBA.png"> West Bromwich Albion</td>
            <td>3-0</td>
            <td>Hazard 25' 71' , Moses 63'/ </td>
            <td>12 Feb 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Watford.png"> Watford</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>4-1</td>
            <td>Deeney (pen) 42' , Janmaat 84' , Deulofeu 88' , Pereyra 90+1' / Hazard 82' </td>
            <td>05 Feb 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Bournemouth.png"> Bournemouth</td>
            <td>0-3</td>
            <td> / Wilson 51' , Stanislas 64' , Ake 67' </td>
            <td>31 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Newcastle_United.png"> Newcastle United</td>
            <td>3-0</td>
            <td>Batshuayi 31' 44' , Alonso 72' / </td>
            <td>28 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Carabao Cup</td>
            <td><img src="imaginiSite/arsenal.png"> Arsenal</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>2-1 (Agg 2-1)</td>
            <td>Rudiger (OG) 12' , Xhaka 60' / Hazard 7' </td>
            <td>24 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Brighton.png"> Brighton and Hove Albion</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-4</td>
            <td> / Eden Hazard 3' 77' , Willian 6' , Moses 89'</td>
            <td>20 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Norwich.png"> Norwich City</td>
            <td>1-1 (5-3 p)</td>
            <td>Batshuayi 55'/ Lewis 90+4' </td>
            <td>17 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Leicester.png"> Leicester City</td>
            <td>0-0</td>
            <td> </td>
            <td>13 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Carabao Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/arsenal.png"> Arsenal</td>
            <td>0-0</td>
            <td> </td>
            <td>10 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>FA Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Norwich.png"> Norwich City</td>
            <td>0-0</td>
            <td> </td>
            <td>06 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/arsenal.png"> Arsenal</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>2-2</td>
            <td>Wilshere 63 , Bellerin 90+2'/ Eden Hazard (pen) 67' , Alonso 84'</td>
            <td>03 Jan 2018</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Stoke_City.png"> Stoke City</td>
            <td>5-0</td>
            <td>Rudiger 3' , Drinkwater 9' , Pedro 23' , Willian (pen) 73' , Zappacosta 88'/ </td>
            <td>30 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Brighton.png"> Brighton and Hove Albion</td>
            <td>2-0</td>
            <td>Morata 46' , Alonso 60' /</td>
            <td>26 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Everton.png"> Everton</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-0</td>
            <td> </td>
            <td>23 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Carabao Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Bournemouth.png"> Bournemouth</td>
            <td>2-1</td>
            <td>Wllian 13' , Morata 90+1'/ Gosling 90'</td>
            <td>20 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Southampton.png"> Southampton</td>
            <td>1-0</td>
            <td>Alonso 45+3'/ </td>
            <td>16 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Huddersfield.png"> Huddersfield Town</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-3</td>
            <td>Depoitre 90+2'/ Bakayoko 23' , Willian 43' , Pedro 50'</td>
            <td>12 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/west-ham.png"> West Ham United</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-0</td>
            <td>Arnautovic 6'/ </td>
            <td>09 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Atletico_Madrid.png"> Atletico de Madrid</td>
            <td>1-1</td>
            <td>Savic (OG) 75'/ Niguez 56'</td>
            <td>05 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Newcastle_United.png"> Newcastle United</td>
            <td>3-1</td>
            <td>Eden Hazard 21' (pen) 74' , Morata 33'/ Gayle 12'</td>
            <td>02 Dec 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Swansea_City.png"> Swansea City</td>
            <td>1-0</td>
            <td>Rudiger 55'/ </td>
            <td>28 Nov 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Liverpool.png"> Liverpool</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-1</td>
            <td>Mohamed Salah 65'/ Willian 85'</td>
            <td>25 Nov 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Qarabag.png"> Fk Qarabag</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-4</td>
            <td> / Eden Hazard (pen) 21' , Willian 36' 85' , Fabregas (pen) 73'</td>
            <td>22 Nov 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/WBA.png"> West Bromwich Albion</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-4</td>
            <td> / Morata 17' ,Eden Hazard 23' 62' , Alonso 38'</td>
            <td>18 Nov 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Manchester_United.jpg"> Manchester United</td>
            <td>1-0</td>
            <td>Morata 55'/ </td>
            <td>05 Nov 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Roma.png"> Roma</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>3-0</td>
            <td>El Shaarawy 1' 36' , Perroti 63' / </td>
            <td>31 Oct 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Bournemouth.png"> Bournemouth</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-1</td>
            <td> / Eden Hazard 51'</td>
            <td>28 Oct 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Carabao Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Everton.png"> Everton</td>
            <td>2-1</td>
            <td>Rudiger 26' , Willian 90+2'/ Calvert-Lewin 90+4'</td>
            <td>25 Oct 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Watford.png"> Watford</td>
            <td>4-2</td>
            <td>Pedro 12' , Batshuayi 71' 90+5' , Azpilicueta 87'/ Doucure 45+2' , Pereyra 49'</td>
            <td>21 Oct 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Roma.png"> Roma</td>
            <td>3-3</td>
            <td>David Luiz 11' , Hazard 37' 75'/ Kolarov 40' , Dzeko 64' 70'</td>
            <td>18 Oct 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Crystal_Palace.png"> Crystal Palace</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>2-1</td>
            <td>Azpilicueta (OG) 11' , Zaha 45'/ Bakayoko 18'</td>
            <td>14 Oct 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Manchester_City.png"> Manchester City</td>
            <td>0-1</td>
            <td> / De Bruyne 67'</td>
            <td>30 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Atletico_Madrid.png"> Atletico de Madrid</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-2</td>
            <td>Griezmann (pen) 40'/Morata 59' , Batshuayi 90+4'</td>
            <td>27 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Stoke_City.png"> Stoke City</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>0-4</td>
            <td> / Morata 2' 77' 82' , Pedro 30'</td>
            <td>23 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Carabao Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Nottingham.png"> Nottingham Forrest</td>
            <td>5-1</td>
            <td>Kenedy 13' , Batshuayi 19' 53' 86' , Musonda 40'/Darikwa 90+1'</td>
            <td>20 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/arsenal.png"> Arsenal</td>
            <td>0-0</td>
            <td>  </td>
            <td>17 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Champions League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Qarabag.png"> Fk Qarabag</td>
            <td>6-0</td>
            <td>Pedro 5' , Zappacosta 30' , Azpilicueta 55' , Bakayoko 71' , Batshuayi 76' , Medvedev (OG) 82'/ </td>
            <td>12 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Leicester.png"> Leicester City</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-2</td>
            <td>Vardy (pen) 62'/Morata 41' , Kante 50'</td>
            <td>09 Sep 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Everton.png"> Everton</td>
            <td>2-0</td>
            <td>Fabregas 27' , Morata 40'/ </td>
            <td>27 Aug 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Tottenham.png">  Tottenham Hotspur</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>1-2</td>
            <td>Batshuayi (OG) 82'/Alonso 24' 88'</td>
            <td>20 Aug 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Premier League</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/Burnley.png"> Burnley</td>
            <td>2-3</td>
            <td>Morata 69' , David Luiz 88'/Vokes 24' 43' , Ward 39</td>
            <td>12 Aug 2017</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>League Cup</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td><img src="imaginiSite/arsenal.png"> Arsenal</td>
            <td>1-1 (1-4 p)</td>
            <td>Eden Hazard 46'/Olivier Giroud 82'</td>
            <td>06 Aug 2017</td>
        </tr>
        </tbody>
    </table>
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
