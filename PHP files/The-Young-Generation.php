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
</head>


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






<h1 style="color: darkblue ; font-size: xx-large ; text-align: center" >THE YOUNG GENERATION : UNDER-18S SEASON IN MOMENTS</h1>
<img style="padding: 20px" class="center" src="imaginiSite/Morris&Brand.jpg">

<p style="font-size: x-large; padding: 20px; color: darkblue">There have been plenty of special moments for the Chelsea Academy in recent years but 2017/18 has certainly been an unprecedented campaign of silverware success for our Under-18s. Jody Morris’s side completed a clean sweep in all four competitions they entered, retaining the FA Youth Cup for the fifth year running as well as the national and regional titles.
    At the end of a remarkable campaign, the official Chelsea website sat down with Morris and Under-18s assistant Ed Brand to reflect on the moments that defined a stunning season...
</p>
<h2 style="color: darkblue ; font-size: xx-large ; padding-left: 20px">Standout Moment</h2>

<p style="padding: 20px ; font-size: large">‘There’s been some great moments, obviously winning four trophies and also moments within that like winning 15 games in a row in all competitions,’ Morris began. ‘Leicester away in the league was a moment for us because of the type of game it was – a tough match and coming from behind to win. It was a great feeling and even better that Tushuan Walters, who had only joined us from grassroots football a couple of months before, came on to get the winner.
</p>

<img style="padding: 20px" class="center" src="imaginiSite/Tushuaun_goal.jpg">

<p style="padding: 20px; font-size: large">You also have to mention the Southampton game in October as a moment; not a good moment for us but a pivotal moment in our season. That was the weekend after Leicester and we lost 4-0. It was a wake-up call that you can’t take your foot off the gas because we were missing the England Under-17 World Cup boys and those who came into the team showed why they hadn’t been first choice. The manner in which we lost was not good but you wonder if we hadn’t experienced that whether we would have gone on the run we did and ended up with four trophies.’

    ‘We didn’t have a game for a while after that so there was a bit of time to stew on it but also for us to get it out of our systems and get the international boys back,’ added Brand. ‘It was definitely a moment for us because it was something we could always refer back to and use to remind the players what can happen if you don’t do things properly.’</p>
<h3 style="font-size: xx-large; color: darkblue; padding: 20px">Team performance</h3>

<p style="padding: 20px;font-size: large">‘The games that spring to mind are West Brom in the FA Youth Cup and Everton in the Under-18 Cup, for two totally different reasons,’ said Morris. ‘Against West Brom, everything seemed to click both on and off the ball, we played some outrageous stuff and made a very good team look average.</p>

<p style="font-size: large; padding: 20px">‘A completely different game was against Everton where we were really up against it; we had players missing, people making their first starts and playing out of position, plus the pitch was in a bad state and it was only a few days after Tottenham in the Youth Cup. We showed the spirited side of our game, team work and working hard for each other, but also dominated the game at a tough place like Everton.</p>
<img style="padding: 20px ;" class="center" src="imaginiSite/Chelsea-Under-18-Premier-Cup-champions.jpg">

<p style="padding: 20px; font-size: 20px">‘I remember we were really proud with that performance and I think it’s one of the reasons why we managed to win everything because whenever there were certain obstacles in front of us, we found different ways to win different games.’</p>


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