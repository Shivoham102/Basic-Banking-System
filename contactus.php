<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">


    body {
      background: -webkit-linear-gradient(left, #0beef9, #48a9fe );
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
    p {
      text-align: center;
      color: #A4FF1A;
    }
    .fa {
     padding-left: 17px;
   }

    </style>
    <title>Bank</title>
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


<div class="container register">
         <div class="row">
             <div class="col-md-12">
                 <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active text-align form-new" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                         <h3 class="register-heading">Fill the Details</h3>
                         <div class="row register-form">
                             <div class="col-md-12">
                                 <form action = "#" method="post">
                                     <div class="form-group">
                                         <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                     </div>
                                     <div class="form-group">
                                         <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                     </div>
                                     <div class="form-group">
                                       <input type="email" name="address" class="form-control" placeholder="Email" required>
                                     </div>

                                     <div class="form-group">
                                         <input type="submit" name="SIGNUP" class="btnContactSubmit" value="Submit">
                                     </div>
                                 </form>
                                 <?php
                                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                   echo "<p>Response submitted :)</p>";
                                 } ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



  </body>
</html>
