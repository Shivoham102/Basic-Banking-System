<?php

    // Username is root
    $servername = "localhost";
    $username = "id16128507_shivoham";
    $password = "Shivoham@4415";
    $database = "id16128507_bank";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Checking for connections
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }else{

        $sql = "SELECT * FROM `users`";
        $result =$conn->query($sql);
        $conn->close();
    }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">

    body {
        background: -webkit-linear-gradient(left, #0beef9, #48a9fe);
    }

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

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 60%;
      position: absolute;
      top: 200%;
      left: 20%;
}

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}
    #customers tr:nth-child(odd){background-color: #ab68fc;}

    /* #customers tr:hover {background-color: #8f37fa;} */

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      margin-top: 20px;
      text-align: center;
      background-color: #751aff;
      color: white;
    }
    #customers tr {
      text-align: center;

    }
    .fa {
     padding-left: 17px;
   }




    </style>

    <title>Bank</title>
  </head>
  <body>
     <!-- <script src="https://kit.fontawesome.com/14f5cf4f5a.js" crossorigin="anonymous"></script> -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <section id = "nav-bar">
      <nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand">TSF BANK  <i class="fa fa-university" aria-hidden="true"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="./index.html">HOME</a>
      </li>
      <li class="nav-item active">
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

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Balance</th>
    <th>View Account</th>
  </tr>

  <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['fname']. " " . $rows['lname'];?></td>

                <td><?php echo $rows['balance'];?></td>
                <td><a href="./profile.php?Name=<?php  echo $rows['fname']." ".$rows['lname']; ?>"><i class="fa fa-exchange" aria-hidden="true"></i>  <i class="fa fa-money" aria-hidden="true"></i></a></td>
            </tr>
            <?php
                }
             ?>
        </table>

  </body>
</html>
