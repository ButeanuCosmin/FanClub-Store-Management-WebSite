
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="css/normalize.css"> 
   <link rel="stylesheet" href="css/skeleton.css"> 
    <link rel="stylesheet" href="css/custom.css">

  <title>Chelsea Fc SHOP</title>
</head>
<body style="margin-top: 50px;">
<?php
include 'navbar.php'
?>

     
<div class="container">
<div class="row" style="margin-top: 10px;">
<div class="container" id="lista-produse">
<div class="row">

<?php

$db = mysqli_connect("localhost", "root", "", "site");
?>

    <h1 style="font-size: xx-large;color: darkblue; padding-left: 20px; padding-top: 20px;"><b>Equipment</b></h1>

        <div class="row mb-3">

<?php
$rezultat = mysqli_query($db, "SELECT * FROM kits ORDER BY id ASC ");

if($rezultat){
    if(mysqli_num_rows($rezultat) > 0){

        while($produs = mysqli_fetch_array($rezultat)){
            ?>


                <div class="one-third column">

                    <img src="laborator5/imaginiSite/<?php echo $produs['Photo'];?>" class="course-image img-fluid u-full-width">
                    <div class="info-card">
                        <h4><?php echo $produs['Name'];?></h4>
                        <p class="price">  <span class="u-pull-right "><?php echo $produs['Price'];?> lei</span></p>
                        <a href="#" class="u-full-width button-primary button input add-to-cart" data-id="1">Add To Cart</a>
                    </div>
                </div> <!-- co-->

            <?php

        }
    }

}
?>
        </div>

</div>
    </div>

</div>
</div>



</div>




















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/main.js"></script>


<script>


    function myFunction() {
        var x = document.getElementById("section_one");

        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }

    }
    function myFunction1() {
        var x = document.getElementById("section_two");

        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }

    }
    function myFunction2() {
        var x = document.getElementById("section_three");

        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";


</script>
<script>

$(document).ready(function () {
  $('.dropdown-toggle').dropdown();
});
</script>

</body>
</html>
