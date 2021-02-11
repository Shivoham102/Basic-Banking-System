<?php

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

$str1 = explode("=",$escaped_url);
$str2 = explode("%20",$str1[1]);
$fname = $str2[0];
$lname = $str2[1];



$servername = "localhost";
$username = "id16128507_shivoham";
$password = "Shivoham@4415";
$database = "id16128507_bank";

$conn = mysqli_connect($servername, $username, $password, $database);


// Checking for connections
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{

    $sql = "SELECT `balance`,`email` FROM `users` WHERE fname = '$fname' AND lname = '$lname' ";
    //$result = mysqli_query($conn, $sql);
    $result =$conn->query($sql);
    while ($rows = $result -> fetch_assoc()) {
      $balance = $rows['balance'];
      $email = $rows['email'];
    }

    $conn->close();
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./profile.css">
    <title>Profile</title>
    <style media="screen">



    .navbar-custom {
    background-color: #751aff;
    height: 100px;
     }

      #nav-bar {
        position: sticky;
        top: 0;
        z-index: 10;
      }

    .navbar-nav li {
      padding: 0 10px;
    }

    .navbar-nav li a {
      float: right;
      text-align: left;
    }
    #nav-bar ul li a:hover {
      color: #FFFF00;
    }
    .nav-link {
      color: black;
      font-weight: 600;
    }
    .navbar-nav mr-auto {
      float: right!important;
    }

    .navbar-toggler {
      border: none!important;
    }

    @font-face {
  font-family: myFirstFont;
  src: url(sansation_light.woff);
}

    .navbar-brand {
      color: #FFFF00!important;
      font-size: 30px;
      font-family : myFirstFont;
      letter-spacing: 3px;
    }
    .fa {
     padding-left: 17px;
   }
    </style>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <section id = "nav-bar">
      <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand">TSF BANK <i class="fa fa-university" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.html">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./customers.php">CUSTOMERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./transactions.php">TRANSACTIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./contactus.php">CONTACT US</a>
            </li>
            </ul>
        </div>
        </nav>
    </section>

    <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">

    <header>

        <!-- here’s the avatar -->
        <a>
          <img src="Images/avatar.jpg">

            
        </a>

        <!-- the username -->
        <h1 id="header">Error</h1>

        <!-- and role or location -->
        <h2>Customer</h2>

    </header>

    <!-- bit of a bio; who are you? -->
    <div class="profile-bio">



        <p id="balance">Balance : 2000</p>
        <p id="email">Email : David@gmail.com</p>

    </div>
    <div class="myButton">

      <!-- <form action="./transfer.php?Name=<?php  echo $fname." ".$lname; ?>" method="get"> -->


          <button onclick="page()" class="btn btn-primary btn-sm"  name="button" style="background-color : #751aff">Transfer Money</button>
  <!-- </form> -->

    </div>

</aside>

<script>
var url = window.location.href;
  var str1 = url.split("=");
  var str2 = str1[1];
  var str3 = str2.split("%20")
  var fname = str3[0];
  var lname = str3[1];
  document.getElementById('header').innerHTML = fname + " " + lname;

  var bal = <?php echo $balance; ?>;
  var email = "<?php echo $email ;?>";
  document.getElementById('balance').innerHTML = "Balance: " + bal;
  document.getElementById('email').innerHTML = "Email: " + email;


  function page() {

    var queryString =  "?Name=" + fname + " " + lname;
    window.location.href =  "./transfer.php" + queryString;

  }

</script>




  </body>
</html>
