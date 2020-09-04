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
            <th scope="col">Pos</th>
            <th scope="col">Team</th>
            <th scope="col">P</th>
            <th scope="col">W</th>
            <th scope="col">D</th>
            <th scope="col">L</th>
            <th scope="col">GF</th>
            <th scope="col">GA</th>
            <th scope="col">GD</th>
            <th scope="col">PTS</th>
        </tr>
        </thead>
        <tbody>
        <tr style="background-color: #d0d0d0">
            <td>1</td>
            <td><img src="imaginiSite/Manchester_City.png"> Manchester City</td>
            <td>38</td>
            <td>32</td>
            <td>4</td>
            <td>2</td>
            <td>106</td>
            <td>27</td>
            <td>79</td>
            <td>100</td>
        </tr>
        <tr style="background-color: #908eff">
            <td>2</td>
            <td><img src="imaginiSite/MUTD.png"> Manchester United</td>
            <td>38</td>
            <td>25</td>
            <td>6</td>
            <td>7</td>
            <td>68</td>
            <td>28</td>
            <td>40</td>
            <td>81</td>
        </tr>
        <tr style="background-color: #908eff">
            <td>3</td>
            <td><img src="imaginiSite/Tottenham.png"> Tottenham Hotspur</td>
            <td>38</td>
            <td>23</td>
            <td>8</td>
            <td>7</td>
            <td>74</td>
            <td>36</td>
            <td>38</td>
            <td>77</td>
        </tr>
        <tr style="background-color: #908eff">
            <td>4</td>
            <td><img src="imaginiSite/Liverpool.png"> Liverpool</td>
            <td>38</td>
            <td>21</td>
            <td>12</td>
            <td>5</td>
            <td>84</td>
            <td>38</td>
            <td>46</td>
            <td>75</td>
        </tr>
        <tr style="background-color: #d08d82">
            <td>5</td>
            <td><img src="imaginiSite/Chelsea.png"> Chelsea</td>
            <td>38</td>
            <td>21</td>
            <td>7</td>
            <td>10</td>
            <td>62</td>
            <td>38</td>
            <td>24</td>
            <td>70</td>
        </tr>
        <tr style="background-color: #d08d82">
            <td>6</td>
            <td><img src="imaginiSite/arsenal.png"> Arsenal</td>
            <td>38</td>
            <td>19</td>
            <td>6</td>
            <td>13</td>
            <td>74</td>
            <td>51</td>
            <td>23</td>
            <td>63</td>
        </tr>
        <tr style="background-color: #d08d82">
            <td>7</td>
            <td><img src="imaginiSite/Burnley.png"> Burnley</td>
            <td>38</td>
            <td>14</td>
            <td>12</td>
            <td>12</td>
            <td>36</td>
            <td>39</td>
            <td>-3</td>
            <td>54</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>8</td>
            <td><img src="imaginiSite/Everton.png"> Everton</td>
            <td>38</td>
            <td>13</td>
            <td>10</td>
            <td>15</td>
            <td>44</td>
            <td>58</td>
            <td>-14</td>
            <td>49</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>9</td>
            <td><img src="imaginiSite/Leicester.png"> Leicester City</td>
            <td>38</td>
            <td>12</td>
            <td>11</td>
            <td>15</td>
            <td>56</td>
            <td>60</td>
            <td>-4</td>
            <td>47</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>10</td>
            <td><img src="imaginiSite/Newcastle_United.png"> Newcastle United</td>
            <td>38</td>
            <td>12</td>
            <td>8</td>
            <td>18</td>
            <td>39</td>
            <td>47</td>
            <td>-8</td>
            <td>44</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>11</td>
            <td><img src="imaginiSite/Crystal_Palace.png"> Crystal Palace</td>
            <td>38</td>
            <td>11</td>
            <td>11</td>
            <td>16</td>
            <td>45</td>
            <td>55</td>
            <td>-10</td>
            <td>44</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>12</td>
            <td><img src="imaginiSite/Bournemouth.png"> Bournemouth</td>
            <td>38</td>
            <td>11</td>
            <td>11</td>
            <td>16</td>
            <td>45</td>
            <td>61</td>
            <td>-16</td>
            <td>44</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>13</td>
            <td><img src="imaginiSite/west-ham.png"> West Ham United</td>
            <td>38</td>
            <td>10</td>
            <td>12</td>
            <td>16</td>
            <td>48</td>
            <td>68</td>
            <td>-20</td>
            <td>42</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>14</td>
            <td><img src="imaginiSite/Watford.png"> Watford</td>
            <td>38</td>
            <td>11</td>
            <td>8</td>
            <td>19</td>
            <td>44</td>
            <td>64</td>
            <td>-20</td>
            <td>41</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>15</td>
            <td><img src="imaginiSite/Brighton.png"> Brighton and Hove Albion</td>
            <td>38</td>
            <td>9</td>
            <td>13</td>
            <td>16</td>
            <td>34</td>
            <td>54</td>
            <td>-20</td>
            <td>40</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>16</td>
            <td><img src="imaginiSite/Huddersfield.png"> Huddersfield Town</td>
            <td>38</td>
            <td>9</td>
            <td>10</td>
            <td>19</td>
            <td>28</td>
            <td>58</td>
            <td>-30</td>
            <td>37</td>
        </tr>
        <tr style="background-color: #ffffff">
            <td>17</td>
            <td><img src="imaginiSite/Southampton.png"> Southampton</td>
            <td>38</td>
            <td>7</td>
            <td>15</td>
            <td>16</td>
            <td>37</td>
            <td>56</td>
            <td>-19</td>
            <td>36</td>
        </tr>
        <tr style="background-color: #9c9c9c">
            <td>18</td>
            <td><img src="imaginiSite/Swansea_City.png"> Swansea City</td>
            <td>38</td>
            <td>8</td>
            <td>9</td>
            <td>21</td>
            <td>28</td>
            <td>56</td>
            <td>-28</td>
            <td>33</td>
        </tr>
        <tr style="background-color: #9c9c9c">
            <td>19</td>
            <td><img src="imaginiSite/Stoke_City.png"> Stoke City</td>
            <td>38</td>
            <td>7</td>
            <td>12</td>
            <td>19</td>
            <td>35</td>
            <td>68</td>
            <td>-33</td>
            <td>33</td>
        </tr>
        <tr style="background-color: #9c9c9c">
            <td>20</td>
            <td><img src="imaginiSite/WBA.png"> West Bromwich Albion</td>
            <td>38</td>
            <td>6</td>
            <td>13</td>
            <td>19</td>
            <td>31</td>
            <td>56</td>
            <td>-25</td>
            <td>31</td>
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