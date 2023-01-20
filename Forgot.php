
<?php 
error_reporting(0);


session_start();
if ( $_SESSION['email']==true) {
    $gg = $_SESSION['email'];
}




$ipaddress = getenv("REMOTE_ADDR") ;
"Your IP Address is " . $ipaddress;
                        
                            include("db/connction.php"); 

if ($_SERVER['REQUEST_METHOD']) {
  
         $sql ="INSERT INTO `ipadd` ( `ipaddress`,`page`, `date`) VALUES ( '$ipaddress','about.php', current_timestamp())";
        $result = mysqli_query($conn,$sql);
         if($result){
          echo '<script language="javascript">';
              echo '</script>';
                            
                    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Real Estate -TLG niwas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="background-image: url(images/bg_1.jpg);">
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
      
       <?php include("import/header.php"); ?>

    <!-- END nav -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">


			    <form action="Forgot.php" method="post" name="categoryfrom" onsubmit="return validatefrom()" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"placeholder="Email id" required>
                    </div>
                      <input type="submit" name="submit" class="btn btn-success" value="submit" >
                </form>
                
                
                <?php
//  include('db/connection.php');
include("db/connction.php");
if(isset($_POST['submit'])){
  $email=$_POST['email'];




   $emailadd = " SELECT * FROM `Registertlg`  WHERE `email`='$email' "; 
            $qu = mysqli_query($conn,$emailadd);
            $emailhaa = mysqli_num_rows($qu);
            if ($emailhaa>0) {
                while($row = mysqli_fetch_array($qu)) { 
                 $passw = $row['passw'];}
                
                
                $subject = " Forgot Password ";
$body = "Dear ,


Please use this ID & PASSWORD to visit the website .

I'd:- $email
Password :- $passw
";
$headers = "From: trueleadergroup@gmail.com";

if (mail($email, $subject, $body, $headers)) {

    echo '<script language="javascript">';
echo 'alert("  you password to send in your mail please check in all Mail  " );';
echo 'window.location="logines.php";';

    echo '</script>';
    


          }  }
           else{ 
 echo '<script language="javascript">';
echo 'alert(" TLG properties Register  " );';
echo 'window.location="logines.php";';
    echo '</script>';
}
           
 }



?>

                
                
            </div>
        </div>
    </div>
</div>

   
    <?php //include("import/foutter.php"); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
