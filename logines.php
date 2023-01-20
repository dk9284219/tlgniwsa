<?php
error_reporting(0);

session_start();
if ( $_SESSION['email']==true) {
    $gg = $_SESSION['email'];
    
       echo '<script language="javascript">';
    echo 'window.location="profiles/";';
    echo '</script>';
    

}

$ipaddress = getenv("REMOTE_ADDR") ;
"Your IP Address is " . $ipaddress;
  
 $ghfgh = "http://ip-api.com/json/".$ipaddress;
 $hfgh = file_get_contents($ghfgh);
 $gfg= json_decode($hfgh);
if ($gfg->status =="success" ){
        $hfg =  $gfg->country ." ". $gfg->regionName ." (". $gfg->region .") ". $gfg->city ." ". $gfg->zip  ;
}else {
    $hfg = " location not found";
}
                        
                            include("db/connction.php"); 

if ($_SERVER['REQUEST_METHOD']) {
  
         $sql ="INSERT INTO `ipadd` ( `ipaddress`,`Address`,`page`, `date`) VALUES ( '$ipaddress','$hfg','logines.html', current_timestamp())";
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
	<link rel="stylesheet" href="css/threedi.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="profile/style.css">

  </head>
  <body>
    <?php include("import/headers.php"); ?>
    <!-- END nav -->





	<div class="section" style="background-image: url('images/bg_1.jpg');">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											
											    <form action="login.php" method="post" name="categoryfrom" onsubmit="return validatefrom()" enctype="multipart/form-data">

<!--include("db/connction.php");-->
<!--if(isset($_POST['submit'])){-->
<!--  $email=$_POST['email'];-->
<!--  $password=$_POST['password'];	-->
											<div class="form-group">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" required autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass"  required autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" name="submit" class="btn mt-4" value="submit">

											<!--<a href="#" class="btn mt-4">submit</a>-->
									    	</form>

											
                            				<p class="mb-0 mt-4 text-center"><a href="Forgot.php" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<form action="logines.php" method="post" name="categoryfrom" onsubmit="return validatefrom()" enctype="multipart/form-data">
											
											<div class="form-group">
												<input type="text" name="title" class="form-style" placeholder="Your Full Name" id="logname"  required autocomplete="off" maxlength="30" >
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
											
												<input type="tel" name="phone" class="form-style" placeholder="Phone" id="logemail"  placeholder="91-9044904409" pattern="[0-9]{10}" required maxlength="10"  autocomplete="off">

												 

												<i class="input-icon uil uil-phone"></i>
											</div>	

											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" required autocomplete="off" maxlength="100" >
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" required autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" name="submit" class="btn mt-4" value="submit">
											
											</form>
											
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
<!-- partial -->

   
   
<?php
        // connecting to database conting 
        include("db/connction.php");
         if(isset($_POST['submit'])){
             //     $idw=$_POST['id'] ;
               $title= $_POST['title'];
               $email= $_POST['email'];
               $phone= $_POST['phone'];
               $password= $_POST['password'];

             $today = date("F j, Y, g:i a");             
             
 $pass = password_hash("$email", PASSWORD_DEFAULT);


   $emailadd = " SELECT * FROM `Registertlg`  WHERE `email`='$email'  "; 
            $qu = mysqli_query($conn,$emailadd);
            $emailhaa = mysqli_num_rows($qu);
            if ($emailhaa>0) {
                 echo "<script>             alert('sorry this id is already Registered in TLG property');
                 
            </script>";
            }else{
               

 $sql = "INSERT INTO `Registertlg` (`title`,  `An`, `email`, `phone`,  `passw`, `pass`,  `color`) VALUES ( '$title',  'customer', '$email','$phone',  '$password', '$pass',  'blueviolet');";
             $result = mysqli_query($conn,$sql);
             if($result){
                     

// $to_email = "dkumar47088@gmail.com";
$subject = "
You are most welcome to join us TLG properties
";
$body = "

Dear $title,

Welcome to the TLG Properties. We are committed to show you and provide best property here on single effort.

Please use this ID & PASSWORD to visit the website and choose your best property.

I'd:- $email



Password :- $password
";
$headers = "From: trueleadergroup@gmail.com";

if (mail($email, $subject, $body, $headers)) {
    // echo "Email successfully sent to $email...";

    
    echo '<script language="javascript">';
echo 'alert("wellcome to  Property  we are send you id and Password in you mail " );';
// echo 'window.location="http://tlgniwas.com/";';
    echo '</script>';
    

              echo '</script>'; }}
            
           else{ echo "<script>             alert('sorry please call +91-7054633323!');
            </script>";
}
           }
           }

        ?>

   
   
   
   
   	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include("import/foutter.php"); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <script  src="profile/script.js"></script>


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