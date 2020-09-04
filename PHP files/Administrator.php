<?php
session_start();
if(isset($_SESSION["admin"]) == "")
{



    ?>
    <script type="text/javascript">

        window.location="Login.php";


    </script>
    <?php
}
?>


<?php

$db = mysqli_connect("localhost", "root", "", "site");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chelsea FC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="../css/style.css">-->
</head>
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
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> Welcome , Administrator
                </a>
                <div class="dropdown-menu">
                    <a href="profile.html" class="dropdown-item">
                        <i class="fa fa-user-circle"></i> Profile
                    </a>
                    <a href="settings.html" class="dropdown-item">
                        <i class="fa fa-gear"></i> Settings
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a href="Logout.php" class="nav-link">
                    <i class="fa fa-user-times"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row" >


            <div class="col-md-6" style="margin-top: 50px;">
                <img src="imaginiSite/frank-lampard-chelsea-football_3879468.jpg" alt="" style="height: 300px ; width: 550px" class="img-fluid">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addUserModal">
                    <i class="fas fa-futbol"></i> Add a Player

                </a>

            </div>



            <div class="col-md-6" style="margin-top:50px;">
                <img src="imaginiSite/LOGO%20Delete%20PM.png" alt="" style="height: 300px" class="img-fluid">
                <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addCategoryModal">
                    <i class="far fa-trash-alt"></i> Delete a Player
                </a>
            </div>


            <div class="col-md-6" style="margin-top:50px;">
                <img src="imaginiSite/search-logo-hi.png" alt="" style="height: 300px" class="img-fluid">
                <a href="#" class="btn btn btn-block text-white" data-toggle="modal" data-target="#addSearch" style="background-color: #2b55ff">
                    <i class="far fa-search-alt" ></i> Search a Player
                </a>
            </div>
        </div>
    </div>
<hr size="30" color="black">
    <div class="container">
        <div class="row">


            <div class="col-md-6" style="margin-top: 50px;">
                <img src="imaginiSite/conte2.jpg" alt="" style="height: 300px ; width: 550px" class="img-fluid">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addStaff">
                    <i class="fas fa-futbol" ></i> Add Staff

                </a>

            </div>



            <div class="col-md-6" style="margin-top:50px;">
                <img src="imaginiSite/LOGO%20Delete%20PM.png" alt="" style="height: 300px" class="img-fluid">
                <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addCategoryModal1">
                    <i class="far fa-trash-alt"></i> Delete Staff
                </a>
            </div>
        </div>
    </div>
    <hr size="30" color="black">
        <div class="container">
            <div class="row" >


                <div class="col-md-6" style="margin-top: 50px;">
                    <img src="imaginiSite/frank-lampard-chelsea-football_3879468.jpg" alt="" style="height: 300px ; width: 550px" class="img-fluid">
                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addItem">
                        <i></i> Add an Item

                    </a>

                </div>



                <div class="col-md-6" style="margin-top:50px;">
                    <img src="imaginiSite/LOGO%20Delete%20PM.png" alt="" style="height: 300px" class="img-fluid">
                    <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteItem">
                        <i class="far fa-trash-alt"></i> Delete an Item
                    </a>
                </div>


                <div class="col-md-6" style="margin-top:50px;">
                    <img src="imaginiSite/search-logo-hi.png" alt="" style="height: 300px" class="img-fluid">
                    <a href="#" class="btn btn btn-block text-white" data-toggle="modal" data-target="#searchItem" style="background-color: #2b55ff">
                        <i class="far fa-search-alt" ></i> Search an Item
                    </a>
                </div>
            </div>
        </div>

</section>


<footer id="myFooter">

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



<!-- sterge jucator -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Delete a player</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="title">Name:</label>
                        <input type="text" name="nume1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Team:</label>
                        <input type="text" name="team1" class="form-control">
                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
                        <button class="btn btn-danger" type="submit" name="sterge" >Sterge</button>
                    </div>
                </form>

                <?php
                if(isset($_POST["sterge"]))

                {

                    $name = $_POST['nume1'];
                    $team = $_POST['team1'];

                    switch ($team) {
                        case "First Team":
                            $sql = "DELETE FROM first_team WHERE Name = '$name'";
                            break;
                        case "Developement Squad":
                            $sql = "DELETE FROM developement_squad WHERE Name = '$name'";
                            break;
                        case "Ladies Team":
                            $sql = "DELETE FROM ladies_team WHERE Name = '$name'";
                            break;
                        case "Under18 Team":
                            $sql = "DELETE FROM under18_team WHERE Name = '$name'";
                            break;
                    }

                    mysqli_query($db, $sql);

                    ?>

                    <script type="text/javascript">
                        window.location="Administrator.php";
                    </script>

                    <?php


                }

                ?>




            </div>
        </div>
    </div>
</div>

<!-- Adauga jucator -->
<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Player</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="form1" action = "" id="forma" method = "post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="user" id="user" class="form-control">
                    </div>

                    <label for="jname">Photo</label>
                    <input type="file" name="jname" id="jname" class="form-control">

                    <div class="form-group">
                        <label for="name">Team</label>
                        <input type="text" name="team"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="link">Position</label>
                        <input type="text"  name="position" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="link">Number</label>
                        <input type="text"  name="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="link">Country</label>
                        <input type="text"  name="country" class="form-control">
                    </div>




                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" name="imagesubmit" type="submit">Add</button>
                    </div>
                </form>





                <?php
                if(isset($_POST["imagesubmit"]))

                {

                    unset($_POST['imagesubmit']);
                    $filename = $_FILES["jname"]["name"];
                    $destination  = 'C:\xampp\htdocs\laborator5\imaginiSite'.$filename;
                    move_uploaded_file($_FILES["jname"]["tmp_name"], $destination);


                    $name = $_POST['user'];
                    $photo = $_FILES['jname']['name'];
                    $team = $_POST['team'];
                    $position = $_POST['position'];
                    $number = $_POST['number'];
                    $country = $_POST['country'];

                    switch ($team) {
                        case "First Team":
                            $sql = "INSERT INTO first_team (Name, Photo, Team, Position, Number, Country) VALUES ('$name', '$photo', '$team', '$position', '$number', '$country')";
                            break;
                        case "Developement Squad":
                            $sql = "INSERT INTO developement_squad (Name, Photo, Team, Position, Number, Country) VALUES ('$name', '$photo', '$team', '$position', '$number', '$country')";
                            break;
                        case "Ladies Team":
                            $sql = "INSERT INTO ladies_team (Name, Photo, Team, Position, Number, Country) VALUES ('$name', '$photo', '$team', '$position', '$number', '$country')";
                            break;
                        case "Under18 Team":
                            $sql = "INSERT INTO under18_team (Name, Photo, Team, Position, Number, Country) VALUES ('$name', '$photo', '$team', '$position', '$number', '$country')";
                            break;
                        default:
                            echo '<script type="application/javascript">alert("Choose an Existent Team"); window.location.href = "'.$redirectUrl.'";</script>';
                    }

                    mysqli_query($db, $sql);

                    ?>

                    <script type="text/javascript">
                        window.location="Administrator.php";
                    </script>

                    <?php


                }

                ?>


            </div>
        </div>
    </div>
</div>


<!-- sterge Staff -->
<div class="modal fade" id="addCategoryModal1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Delete Staff</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="title">Name:</label>
                        <input type="text" name="nume2" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-danger" type="submit" name="sterge" >Delete</button>
                    </div>
                </form>

                <?php
                if(isset($_POST["sterge"]))

                {

                    $name = $_POST['nume2'];


                    $sql = "DELETE FROM management WHERE name = '$name'";
                    mysqli_query($db, $sql);

                    ?>

                    <script type="text/javascript">
                        window.location="Administrator.php";
                    </script>

                    <?php


                }

                ?>




            </div>
        </div>
    </div>
</div>

<!-- Adauga Staff -->
<div class="modal fade" id="addStaff">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Staff</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="form2" action = "" id="forma" method = "post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="user1" id="user1" class="form-control">
                    </div>

                    <label for="jname">Photo</label>
                    <input type="file" name="jname1" id="jname1" class="form-control">


                    <div class="form-group">
                        <label for="link">Role</label>
                        <input type="text"  name="role" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="link">Country</label>
                        <input type="text"  name="country1" class="form-control">
                    </div>




                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" name="imagesubmit1" type="submit">Add</button>
                    </div>
                </form>




                <?php
                if(isset($_POST["imagesubmit1"]))

                {

                    unset($_POST['imagesubmit1']);
                    $filename1 = $_FILES["jname1"]["name"];
                    $destination1  = 'C:\xampp\htdocs\laborator5\imaginiSite'.$filename1;
                    move_uploaded_file($_FILES["jname1"]["tmp_name"], $destination1);


                    $nume1 = $_POST['user1'];
                    $role = $_POST['role'];
                    $country1 = $_POST['country1'];
                    $poza1 = $_FILES['jname1']['name'];

                    $sql1 = "INSERT INTO management (Name, Photo, Role, Country) VALUES ('$nume1', '$poza1', '$role', '$country1')";
                    mysqli_query($db, $sql1);

                    ?>

                    <script type="text/javascript">
                        window.location="Administrator.php";
                    </script>

                    <?php


                }

                ?>



            </div>
        </div>
    </div>
</div>

<!----- Search Player ---->


<div class="modal fade" id="addSearch">
    <div class="modal-dialog modal-lg" style="background-color: #2b55ff">
        <div class="modal-content">
            <div class="modal-header  text-white" style="background-color: #2b55ff">
                <h5 class="modal-title">Search Player</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="title">Name:</label>
                        <input type="text" name="nume3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Team:</label>
                        <input type="text" name="team2" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn " type="submit" name="search" style="background-color: #2b55ff">Search</button>
                    </div>
                </form>



                <?php

                if(isset($_POST['search'])) {

                    $searchquery=$_POST['search'];
                    $nume2=$_POST['nume3'];
                    $team2=$_POST['team2'];
                    $row='';
                    switch ($team2) {
                        case "First Team":
                            $sql = mysqli_query($db,"SELECT * FROM first_team WHERE Name = '$nume2'");
                        while($row = mysqli_fetch_array($sql))
                        {
                        ?>
                            <div class="card" style=" width: 66%">
                                <div class="card bg-dark text-white">
                                    <div class="zoom">
                                        <img class="card-img" src="imaginiSite/<?php print $row['Photo']; ?>" alt="Card Image" height="485" width="600">
                                        <div class="card-img-overlay">
                                        </div>
                                        <div class="text-block" >
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
                    <?php
                            break;
                        case "Developement Squad":
                            $sql = mysqli_query($db,"SELECT * FROM developement_squad WHERE Name = '$nume2'");
                            while($row = mysqli_fetch_array($sql))
                            {
                                ?>
                                <div class="card" style=" width: 66%">
                                    <div class="card bg-dark text-white">
                                        <div class="zoom">
                                            <img class="card-img" src="imaginiSite/<?php print $row['Photo']; ?>" alt="Card Image" height="485" width="600">
                                            <div class="card-img-overlay">
                                            </div>
                                            <div class="text-block" >
                                                <h5 class="card-title" style="font-size: x-large" ><b><?php echo $row["Name"]; ?></b></h5>
                                                <p class="card-text" style="font-size: large"><b><?php echo $row["Country"]; ?></b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }

                            ?>
                            <?php
                            break;
                        case "Ladies Team":
                            $sql = mysqli_query($db,"SELECT * FROM ladies_team WHERE Name = '$nume2'");
                            while($row = mysqli_fetch_array($sql))
                            {
                                ?>
                                <div class="card" style=" width: 66%">
                                    <div class="card bg-dark text-white">
                                        <div class="zoom">
                                            <img class="card-img" src="imaginiSite/<?php print $row['Photo']; ?>" alt="Card Image" height="370" width="500">
                                            <div class="card-img-overlay">
                                            </div>
                                            <div class="text-block" style="color: black">
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
                            <?php
                            break;
                        case "Under18 Team":
                            $sql = mysqli_query($db,"SELECT * FROM under18_team WHERE Name = '$nume2'");
                            while($row = mysqli_fetch_array($sql))
                            {
                                ?>
                                <div class="card" style=" width: 66%">
                                    <div class="card bg-dark text-white">
                                        <div class="zoom">
                                            <img class="card-img" src="imaginiSite/<?php print $row['Photo']; ?>" alt="Card Image" height="485" width="600">
                                            <div class="card-img-overlay">
                                            </div>
                                            <div class="text-block" >
                                                <h5 class="card-title" style="font-size: x-large" ><b><?php echo $row["Name"]; ?></b></h5>
                                                <p class="card-text" style="font-size: large"><b><?php echo $row["Country"]; ?></b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }

                            ?>
                            <?php
                            break;
                    }



                }











                ?>



                            </div>
                        </div>
                    </div>
                </div>


<!-- Adauga Staff -->
<div class="modal fade" id="addItem">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Item</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="form2" action = "" id="forma" method = "post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="item">Name</label>
                        <input type="text" name="item" id="item" class="form-control">
                    </div>

                    <label for="jnameitem">Photo</label>
                    <input type="file" name="jnameitem" id="jnameitem" class="form-control">


                    <div class="form-group">
                        <label for="link">Price</label>
                        <input type="text"  name="price" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="link">Product</label>
                        <input type="text"  name="product" class="form-control">
                    </div>




                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" name="imagesubmititem" type="submit">Add</button>
                    </div>
                </form>




                <?php
                if(isset($_POST["imagesubmititem"]))

                {

                    unset($_POST['imagesubmititem']);
                    $filename1 = $_FILES["jnameitem"]["name"];
                    $destination1  = 'C:\xampp\htdocs\laborator5\imaginiSite'.$filename1;
                    move_uploaded_file($_FILES["jnameitem"]["tmp_name"], $destination1);


                    $item = $_POST['item'];
                    $product = $_POST['product'];
                    $price = $_POST['price'];
                    $photo = $_FILES['jnameitem']['name'];

                    $sql1 = "INSERT INTO kits (Name, Photo, Price, Product) VALUES ('$item', '$photo', '$price', '$product')";
                    mysqli_query($db, $sql1);

                    ?>

                    <script type="text/javascript">
                        window.location="Administrator.php";
                    </script>

                    <?php


                }

                ?>



            </div>
        </div>
    </div>
</div>

<!-- sterge Item -->
<div class="modal fade" id="deleteItem">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Delete Item</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="title">Name:</label>
                        <input type="text" name="item" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-danger" type="submit" name="stergeItem" >Delete</button>
                    </div>
                </form>

                <?php
                if(isset($_POST["stergeItem"]))

                {

                    $name = $_POST['item'];


                    $sql = "DELETE FROM kits WHERE Name = '$name'";
                    mysqli_query($db, $sql);

                    ?>

                    <script type="text/javascript">
                        window.location="Administrator.php";
                    </script>

                    <?php


                }

                ?>




            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>



</body>
</html>
