<?php

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

$str1 = explode("=",$escaped_url);
$str2 = explode("%20",$str1[1]);
$fname = $str2[0];
$lname = $str2[1];

$sfname='';
$slname='';
$rfname='';
$rlname='';
$amt=0;


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

        $sql = "SELECT `balance` FROM `users` WHERE fname = '$fname' AND lname = '$lname'";
        //$result = mysqli_query($conn, $sql);
        $result =$conn->query($sql);
        while ($rows = $result -> fetch_assoc()) {
          $balance = $rows['balance'];
        }
        $conn->close();
    }
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="./transfer.css">
     <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <title>Transfer Money</title>
     <style media="screen">
     body {

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
       font-size: 17px;
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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
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

     <div class="container">
          <div class="register">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="tab-content" id="myTabContent">
                               <div class="tab-pane fade show active text-align form-new" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                   <h3 class="register-heading" style="margin-left:0px;text-align:center">Payer's Details</h3>
                                   <div class="row register-form">
                                       <div class="col-md-12">
                                           <form action = "<?php echo $escaped_url; ?>" method="post"  id="form1">
                                               <div class="form-group" >
                                                   <input id="fname" type="text" name="fname" class="form-control" placeholder="First Name" required readonly>
                                               </div>
                                               <div class="form-group" >
                                                   <input id="lname" type="text" name="lname" class="form-control" placeholder="Last Name" required readonly>
                                               </div>
                                               <div class="form-group">
                                                 <input id="amount" type="number" name="amount" class="form-control" placeholder="Amount" required>
                                               </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="myregister">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active text-align form-new" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                        <h3 class="register-heading" style="margin-left:0px;text-align:center">Receiver's Details</h3>
                                        <div class="row register-form">
                                            <div class="col-md-12">
                                              <div class="form-group" >
                                                  <input  type="text" name="rfname" class="form-control" placeholder="First Name" required>
                                              </div>
                                              <div class="form-group" >
                                                  <input  type="text" name="rlname" class="form-control" placeholder="Last Name" required>
                                              </div>
                                              <div class="form-group" >
                                              <input  value="Transfer" type="submit" class="btn btn-primary btn-lg" style="position: absolute;
                                              right: 220%;
                                              top: 210%;
                                              padding: 10px;
                                              width: 150%;">
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="img" src="Images/4636951.jpg">
     </div>


<script>
var url = window.location.href;
var str1 = url.split("=");
var str2 = str1[1];
var str3 = str2.split("%20")
var fname = str3[0];
var lname = str3[1];
document.getElementById('fname').value = fname;
document.getElementById('lname').value = lname;
</script>

   </body>
 </html>

 <?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') {

   $sfname=$_POST['fname'];
   $slname=$_POST['lname'];
   $rfname=$_POST['rfname'];
   $rlname=$_POST['rlname'];
   $amt=$_POST['amount'];
   $validreceiver=false;
   $suffbal = false;
   $rBal=0;
   $uprBal=0;
   $sbal = 0;

 $servername = "localhost";
 $username = "id16128507_shivoham";
 $password = "Shivoham@4415";
 $database = "id16128507_bank";

 $conn = mysqli_connect($servername, $username, $password, $database);

 // Checking for connections
 if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
 }
 else{

   $sql1 = "SELECT `balance` FROM `users` WHERE fname = '$sfname' AND lname = '$slname'";
   $result1 =$conn->query($sql1);
   while ($rows = $result1 -> fetch_assoc()) {
     $sbal=$rows['balance'];
     if($amt > $sbal){
           $suffbal=false;
           $upsbal=$sbal;
      }
     else{
         $suffbal=true;
         $upsbal=$sbal-$amt;
     }
   }

   $sql2 = "SELECT `balance` FROM `users` WHERE fname = '$rfname' AND lname = '$rlname'";
   $result2 =$conn->query($sql2);
   while ($rows = $result2 -> fetch_assoc()) {
     $validreceiver=true;
     $rBal = $rows['balance'] + $amt;
   }


   if($validreceiver == false && $suffbal == false) {

     echo "<script> Swal.fire({
          title: 'Aww Man :/',
          text: 'Insufficient Funds and Wrong Receiver Name ',
        icon: 'error',
         confirmButtonText: 'OK'
       });</script>" ;
        }

   elseif ($validreceiver == false) {
     echo "<script> Swal.fire({
          title: 'Aww Man :/',
          text: 'Invalid Receiver Name ',
        icon: 'error',
         confirmButtonText: 'OK'
       });</script>" ;
   }

   elseif ($suffbal == false) {
     echo "<script> Swal.fire({
          title: 'Aww Man :/',
          text: 'Insufficient Funds !',
        icon: 'error',
         confirmButtonText: 'OK'
       });</script>" ;
   }

   else {
     $sql3="UPDATE `users` SET `balance`=$rBal WHERE `fname`= '$rfname' AND `lname` = '$rlname'";
     $result3 = $conn->query($sql3);
     $sql4="UPDATE `users` SET `balance`=$upsbal WHERE `fname`= '$sfname' AND `lname` = '$slname'";
     $result4 = $conn->query($sql4);

     echo "<script>
          Swal.fire({
          title: 'Success!',
          text: 'Transaction Succesful',
          icon: 'success',
         confirmButtonText: 'OK'
       });</script>" ;

      $sender = $sfname." ".$slname;
      $receiver = $rfname." ".$rlname;
      $sql5 = "INSERT INTO `transactions`(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver',$amt)";
      $result5 = $conn->query($sql5);
   }
 }

     $conn->close();
 }
 ?>
