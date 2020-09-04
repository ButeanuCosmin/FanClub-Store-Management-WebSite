<?php
  
  
  if(isset($_SESSION["admin"]) == "")
  {
  
  }


?>



  <nav class="navbar navbar-expand-lg  navbar-light fixed-top " id="nav">
    <div class="container">
        <ul class="navbar-nav mr-auto">
<div class="brande">
    <a class="navbar-brand" href="laborator5/Home.php"><img src="laborator5/imaginiSite/LOGOChelsea.png" class="icon" alt="icon" style="max-width: 150px; min-width: 150px; color: white"></a>
</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <li class="nav-item">
              <a class="nav-link" href="laborator5/News.php">News<span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teams
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1A2223">
                    <a class="dropdown-item" href="laborator5/First%20Team.php">First Team</a>
                    <a class="dropdown-item" href="laborator5/Developement%20Squad.php">Developement Squad</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="laborator5/Under-18%20Team.php">Under-18 Team</a>
                    <a class="dropdown-item" href="laborator5/Ladies%20Team.php">Ladies Team</a>
                    <a class="dropdown-item" href="laborator5/Management.php">Management</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Results
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
                    <a class="dropdown-item" href="laborator5/Fixtures.php">Fixtures</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="laborator5/Standings.php">Standings</a>
                </div>
            </li>

        <li class="submenu nav-item cl-effect-3">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                            <div id="shopping-cart">
                                    <table id="cart-content" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="clear-cart" class="btn btn-primary">Empty your Cart</a>
                            </div>
                    </li>
                    <a class="nav-link" href="http://localhost/Fotbal/magazin.php" style="color: white; font-size: 14px ">SHOP<span class="sr-only">(current)</span></a>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px;">
                            Sign Up
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
                            <a class="dropdown-item" href="laborator5/Register.php">Register</a>
                            <a class="dropdown-item" href="laborator5/Login.php">Login</a>
                            <a class="dropdown-item" href="laborator5/Administrator.php">Administrator</a>
                        </div>
                    </li>

                </ul>

      </div>
  </nav>


<script>


  $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
  });

</script>
