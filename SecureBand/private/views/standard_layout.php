<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Flint Naafs MG1B">
  <title>MyBand</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" type="images/x-icon" href="images/icon.jpg" />
  <script src="js/jquery-3.4.1-min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/script2.js"></script>

</head>
<ul>
  <a href="http://flintvladimirnaafs.nl/mybandt1/public/">
  <img class="iconbalk" src="images/icon.png" alt="">
</a>
  <li> <a href="http://flintvladimirnaafs.nl/mybandt1/public/">Home</a> </li>
  <li> <a href="http://flintvladimirnaafs.nl/mybandt1/public/tyler1">About</a> </li>
  <li> <a href="http://flintvladimirnaafs.nl/mybandt1/public/contact">Contact</a> </li>
  <li> <a href="http://flintvladimirnaafs.nl/mybandt1/public/schedule">Schedule</a> </li>

  <div class="topnav">
    <div class="search-bar">

    <form action="index.php" method="GET">
     <input type="hidden" name="page" value="zoeken">
     <input type="search" name="term" value="" placeholder="hier zoeken">
      </form>
    </div>

</div>
</ul>


   <?php echo $this->section('content')?>


   <div class="balkje2">
     <div class="wat">
         <p>&copy;Flint Naafs 2018</p>
       </div>

   </div>
      </body>
    </html>
