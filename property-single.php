 <?php 
 error_reporting(0);

session_start();
if ( $_SESSION['email']==true) {
    $gg = $_SESSION['email'];
}

                            include("db/connction.php"); 
                            $link=$_GET['single'];
                                    $sql ="SELECT * FROM `property` where a130='$link' ";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($result)){
                                        $title=$row['title'];
                                        $propertysale=$row['propertysale'];
                                        $propertysppt=$row['propertysppt'];
                                        $Facingewns=$row['Facingewns'];
                                        $Ra=$row['Ra'];
                                        $sop=$row['sop'];
                                        $Rpsf=$row['Rpsf'];
                                        $Tsa=$row['Tsa'];
                                        $NONselectNegotiable=$row['NONselectNegotiable'];
                                        $Locality=$row['Locality'];
                                        $LandMark=$row['LandMark'];
                                        $Pincode=$row['Pincode'];
                                        $CityTown=$row['CityTown'];
                                        $State=$row['State'];
                                        $Hospital=$row['Hospital'];
                                        $School=$row['School'];
                                        $Market=$row['Market'];
                                        $Highway=$row['Highway'];
                                        $Railwaystation=$row['Railwaystation'];
                                        $Busstand=$row['Busstand'];
                                        $Airport=$row['Airport'];
                                        $government=$row['government'];
                                        $private=$row['private'];
                                        $Other=$row['Other'];
                                        $a11=$row['a11'];
                                        $a22=$row['a22'];
                                        $a33=$row['a33'];
                                        $a44=$row['a44'];
                                        $a55=$row['a55'];
                                        $a66=$row['a66'];
                                        $a77=$row['a77'];
                                        $a88=$row['a88'];
                                        $a99=$row['a99'];
                                        $a100=$row['a100'];
                                        $a110=$row['a110'];
                                        $a120=$row['a120'];
                                        $a130=$row['a130'];
                                        $a140=$row['a140'];
                                        $a150=$row['a150'];
                                        $thumall=$row['thumall'];
                                        $thumall1=$row['thumall1'];
                                        $thumall2=$row['thumall2'];
                                        $thumall3=$row['thumall3'];
                                        $thumall4=$row['thumall4'];
                                        
                                        }?>
  
  
  
 <?php
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

                //   $page=$a130;     
                            include("db/connction.php"); 

if ($_SERVER['REQUEST_METHOD']) {
  
         $sql ="INSERT INTO `ipadd` ( `ipaddress`, `Address`,`page`, `unick`,`date`) VALUES ( '$ipaddress','$hfg','$a130','track', current_timestamp())";
        $result = mysqli_query($conn,$sql);
         if($result){
          echo '<script language="javascript">';
              echo '</script>';
                            
                    }
}
?>




<!DOCTYPE html>
<html >
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166053168-2">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166053168-2');
</script>
<!-- End To Global site tag (gtag.js) - Google Analytics -->

  </head>
  
  <body>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
	         <?php include("import/headers.php"); ?>

    <!-- END nav -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<form action="Inquiry.php" method="post" name="categoryfrom" onsubmit="return validatefrom()" enctype="multipart/form-data">
   
    <div style="-webkit-text-stroke-width: thin;font-size: larger;color: #27a943;" > Enquiry form (<?php echo $title; ?>)</div>
    <hr>
  <div class="form-group" style="display: flex;">
    <label for="email" style=" width: 200px;" >Name:</label>
    <input type="text"  name="name" class="form-control" id="email" placeholder="Name " required>
  </div>
    <div class="form-group" style="display: flex;">
      <label for="phone" style=" width: 200px;">Mobile number</label>
      <input type="number" class="form-control" name="phone" id="phone" min="10"  aria-describedby="emailHelp"placeholder="Mobile number" required>
    </div>
  
    
   <input type="hidden" class="form-control" name="Description" id="email" aria-describedby="emailHelp" value="https://tlgniwas.com/property-single.php?single=<?php echo $a130; ?>"  required>

  
   <input type="hidden" class="form-control" name="Des" id="email" aria-describedby="emailHelp" value="<?php echo $ipaddress; ?>"  required>


      <div class="form-group" style="    text-align: center;">

  <input type="submit" name="submit" class="btn btn-success" value="submit" >
</div>
</form>
  </div>

</div>


    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Property Single</span></p>
            <h1 class="mb-3 bread">Property Single</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          			         <?php if( $thumall==""  ){}else{ ?>  
          				<div class="item">
          					<div class="properties-img" style="background-image: url(<?php echo "profiles/".$thumall; ?>);"></div>
          				</div>
          				     <?php } if( $thumall1==""  ){}else{ ?>  
          				<div class="item">
          					<div class="properties-img" style="background-image: url(<?php echo "profiles/".$thumall1; ?> );"></div>
          				</div>
          				     <?php } if( $thumall2==""  ){}else{ ?>  
          				<div class="item">
          					<div class="properties-img" style="background-image: url(<?php echo "profiles/".$thumall2; ?>);"></div>
          				</div>
          				     <?php } if( $thumall3==""  ){}else{ ?>  
          				<div class="item">
          					<div class="properties-img" style="background-image: url(<?php echo "profiles/".$thumall3; ?>);"></div>
          				</div>
          				<?php } ?>
          			</div>
          		</div>
          		<div class="Properties-single mt-4 mb-5 ftco-animate">
          			  
          			<p class="rate mb-4">
    			            
		<!--<a href="property-single.php?single=<?php //echo $a130; ?>" >  -->
          			  <!--<button type="button" id="myModal" class="modal fade btn btn-danger btn-lg btn3d" data-filter="PLOT" style="border-radius: inherit;-webkit-box-shadow: snow;">Enquiry Form </button>-->
          			  
 
<!-- Trigger/Open The Modal -->
<!--<button id="myBtn">Open Modal</button>-->


                <button type="button" class="btn btn-danger btn-lg btn3d" id="myBtn" data-filter="PLOT" style="border-radius: inherit;-webkit-box-shadow: snow;">Enquiry Form</button>

<!-- The Modal -->
          			  
          			  <!--</a>-->
    						    
<?php if($a150=="PLOT"){ ?>
                  <div class="" style='text-transform: capitalize;' >

   <div >



     <?php if( $title==""  ){}else{ echo "<strong style='font-size:30px'>●   ". $title." </strong> <br>"; }  ?>
      <?php if( $Tsa==""  ){}else{ echo "<strong style='font-size:30px'>  Rs ". $Tsa / "100000" ." lac </strong><br>";}  ?> 

   <?php if( $propertysale==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Property to sale : </b> ". $propertysale." <br>";}  ?> 
    <?php if( $sop==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Size (Width × Depth) :</b> ". $sop." sqft <br>"; }  ?> 
     <?php if( $Facingewns==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Facing :</b> ". $Facingewns." <br>";}  ?> 
 <?php if( $Rpsf==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Rate Per Square Feet   ₹</b> ". $Rpsf." <br>";}  ?>
  <?php if( $propertysppt==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Property :</b> ". $propertysppt." <br>";}  ?>    
 <?php if( $NONselectNegotiable==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Property Amount : </b> ". $NONselectNegotiable."<br> ";}  ?> 


 <?php if( $Ra==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Road Available :</b> ". $Ra." <br>";}  ?>


  
   
<div  class="card-title" >   <span class="loc"><a href="#"><i class="icon-map"></i>
LOCATION OF THE SITE
</div>
   <?php if( $Locality==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Locality: </b> ". $Locality." <br>";}  ?> </a></span>
 <?php if( $LandMark==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Land Mark :  </b> ". $LandMark." <br>";}  ?> 
 <?php if( $CityTown==""  ){}else{ echo "<b style='text-transform: capitalize;'>● City :</b> ". $CityTown." <br>";}  ?>
  <?php if( $State==""  ){}else{ echo "<b style='text-transform: capitalize;'>● State :</b> ". $State." <br>";}  ?>
  <?php if( $Pincode==""  ){}else{ echo "<b style='text-transform: capitalize;'> ● Pin Code :  </b> ". $Pincode." <br>";}  ?> 
 
 <?php if( $Hospital==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Hospital :</b> ". $Hospital." <br>";}  ?> 
 <?php if( $School==""  ){}else{ echo "<b style='text-transform: capitalize;'>● School  :</b> ". $School." <br>";}  ?> 
 <?php if( $Market==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Market  :</b> ". $Market." <br>";}  ?> 
 <?php if( $Highway==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Highway :</b> ". $Highway." <br>";}  ?> 
 
 <?php if( $Railwaystation==""  ){}else{ echo "<b>● Railway Station :</b> ". $Railwaystation." <br>";}  ?> 
 <?php if( $Busstand==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Bus stand :</b> ". $Busstand." <br>";}  ?> 
 <?php if( $Airport==""  ){}else{ echo "<b style='text-transform: capitalize;'> ● Near by government project :</b> ". $Airport." <br>";}  ?> 
 <?php if( $government==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Near by private company :</b> ". $government." <br>";}  ?> 
 <?php if( $private==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Any other informasion :</b> ". $private." <br>";}  ?> 
 
<?php if( $thumall4=="") {} else { ?>
          				 <div class="item">
          				<embed src="<?php echo "profiles/".$thumall4; ?>" width="100%" ></div>
          				</div>
          				
          				<div>
          				    <a  href="<?php echo "profiles/".$thumall4; ?>" >
          				   <button type="button"  class="btn btn-danger btn-lg btn3d"  style="border-radius: inherit;-webkit-box-shadow: snow;">Download</button></a>  
          				</div>

          				<?php  } ?>


</div>
 </div>
 <?php } elseif ($a150=="Flat") { ?>

  <div class="" style='text-transform: capitalize;' >

   <div >

       
       <?php if( $title==""  ){}else{ echo "<strong style='font-size:30px'>●   ". $title." </strong> <br>"; }  ?>
      <?php if( $Tsa==""  ){}else{ echo "<strong style='font-size:30px'>  Rs ". $Tsa  / "100000" ." lakh </strong><br>";}  ?> 
      
 <?php if( $propertysale==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Property to sale : </b> ". $propertysale." <br>";}  ?> 
 <?php if( $propertysppt==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Property :</b> ". $propertysppt."  <br>";}  ?> 
 <?php if( $Facingewns==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Facing :</b> ". $Facingewns." <br>";}  ?> 
 <?php if( $Ra==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Road Available :</b> ". $Ra." Feet <br>";}  ?>
 <?php if( $sop==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Size (Width × Depth) :</b> ". $sop."sqft <br>";}  ?> 
 <?php if( $Rpsf==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Rate Per Square Feet : ₹</b> ". $Rpsf." <br>";}  ?>
 <?php if( $a88==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Carpet Area :</b> ". $a88."sqft <br>";}  ?>

  <?php if( $a77==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Build-up Area :</b> ". $a77." sqft <br>";}  ?>
  <?php if( $a66==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Super Build-up Area :</b> ". $a66." sqft <br>";}  ?>
   <?php if( $NONselectNegotiable==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Property Amount : </b> ". $NONselectNegotiable."<br>";}  ?> 

   <h3  class="card-title" >Amenities</h3>

 <?php if( $a120==""  ){}else{ echo "<b style='text-transform: capitalize;'> </b>". $a120." <br>";}  ?> 

 
<h6  class="card-title" >   <span class="loc"><a href="#"><i class="icon-map"></i>
LOCATION OF THE SITE
</h6>

 <?php if( $Locality==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Locality :</b> ". $Locality." <br>";}  ?> </a></span>
 <?php if( $LandMark==""  ){}else{ echo "<b style='text-transform: capitalize;'>●  Land Mark  : </b> ". $LandMark." <br>";}  ?> 
 <?php if( $Pincode==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Pin Code  : </b> ". $Pincode." <br>";}  ?> 
 <?php if( $CityTown==""  ){}else{ echo "<b style='text-transform: capitalize;'>● City  :</b> ". $CityTown." <br>";}  ?>
  <?php if( $State==""  ){}else{ echo "<b style='text-transform: capitalize;'>● State :</b> ". $State." <br>";}  ?>
 <?php if( $Hospital==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Hospital :</b> ". $Hospital."<br>";}  ?> 
 <?php if( $School==""  ){}else{ echo "<b style='text-transform: capitalize;'>● School : </b> ". $School." <br>";}  ?> 
 <?php if( $Market==""  ){}else{ echo "<b style='text-transform: capitalize;'>● Market : </b> ". $Market." <br>";}  ?> 
 <?php if( $Highway==""  ){}else{ echo "<b>● Highway :</b> ". $Highway." <br>";}  ?> 
 
 <?php if( $Railwaystation==""  ){}else{ echo "<b>● Railway Station :</b> ". $Railwaystation."<br>";}  ?> 
 <?php if( $Busstand==""  ){}else{ echo "<b>● Bus Stand :</b> ". $Busstand." <br><br>";}  ?> 
 <?php if( $Airport==""  ){}else{ echo "<b>● Near By government Project :</b> ". $Airport."<br>";}  ?> 
 <?php if( $government==""  ){}else{ echo "<b>● Near By private Company :</b> ". $government." <br>";}  ?> 
 <?php if( $private==""  ){}else{ echo "<b>● Any Other Informasion :</b> ". $private." <br>";}  ?> 
<?php if( $thumall4=="") {} else { ?>
          				 <div class="item">
          				<embed src="<?php echo "profiles/".$thumall4; ?>" width="100%" ></div>
          				</div>
          				
          				<div>
          				    <a  href="<?php echo "profiles/".$thumall4; ?>" >
          				   <button type="button"  class="btn btn-danger btn-lg btn3d"  style="border-radius: inherit;-webkit-box-shadow: snow;">Download</button></a>  
          				</div>

          				<?php  } ?>

     
</div>
 </div>


 <?php } elseif ($a150=="plex") { ?>


 <div class="" style='text-transform: capitalize;' >

   <div >
   <?php if( $title==""  ){}else{ echo "<strong style='font-size:30px'>●   ". $title." </strong> <br>"; }  ?>
      <?php if( $Tsa==""  ){}else{ echo "<strong style='font-size:30px'>  Rs ". $Tsa / "100000" ."lac </strong><br>";}  ?> 
      
      <?php if( $propertysale==""  ){}else{ echo "<b>●  Property to sale :</b> ". $propertysale." <br>";}  ?> 
 <?php if( $propertysppt==""  ){}else{ echo "<b>●  Property :</b> ". $propertysppt." <br>";}  ?> 
 <?php if( $Facingewns==""  ){}else{ echo "<b>● Facing :</b> ". $Facingewns." <br>";}  ?> 
 <?php if( $a66==""  ){}else{ echo "<b>● Super Build-up area :</b> ". $a66." <br>";}  ?> 
 <?php if( $a77==""  ){}else{ echo "<b>● Build-up Area : </b> ". $a77." <br>";}  ?> 
 <?php if( $a88==""  ){}else{ echo "<b>● Carpet Area : </b> ". $a88." <br>";}  ?> 
 <?php if( $Ra==""  ){}else{ echo "<b>● Road Available :</b> ". $Ra." <br>";}  ?>
 <?php if( $sop==""  ){}else{ echo "<b>● Size (Width × Depth) :</b> ". $sop."sqft <br>";}  ?> 
 <?php if( $Rpsf==""  ){}else{ echo "<b>● Rate per Square feet : Rs</b> ". $Rpsf." <br>";}  ?>

 <?php if( $NONselectNegotiable==""  ){}else{ echo "<b>●  property Amount :</b> ". $NONselectNegotiable."<br>";}  ?> 
 

   <h6  class="card-title" >   <span class="loc"><a href="#"><i class="icon-map"></i>
LOCATION OF THE SITE</h6>

 <?php if( $Locality==""  ){}else{ echo "<b>● Locality :</b> ". $Locality." <br>";}  ?> </a></span>
 <?php if( $LandMark==""  ){}else{ echo "<b>●  Land Mark :</b> ". $LandMark." <br>";}  ?> 
 <?php if( $Pincode==""  ){}else{ echo "<b>● Pin code :</b> ". $Pincode." <br>";}  ?> 
 <?php if( $CityTown==""  ){}else{ echo "<b>● City :</b> ". $CityTown." <br>";}  ?>
 <?php if( $State==""  ){}else{ echo "<b>● State :</b> ". $State." <br>";}  ?>
 
 <?php if( $Hospital==""  ){}else{ echo "<b>● Hospital :</b> ". $Hospital." <br>";}  ?> 
 <?php if( $School==""  ){}else{ echo "<b>● School :</b> ". $School." <br>";}  ?> 
 <?php if( $Market==""  ){}else{ echo "<b>● Market :</b> ". $Market." <br>";}  ?> 
 <?php if( $Highway==""  ){}else{ echo "<b>● Highway :</b> ". $Highway." <br>";}  ?> 
 <?php if( $Railwaystation==""  ){}else{ echo "<b>● Railway Station :</b> ". $Railwaystation." <br>";}  ?> 
 <?php if( $Busstand==""  ){}else{ echo "<b>● Bus stand :</b> ". $Busstand." <br>";}  ?> 
 <?php if( $Airport==""  ){}else{ echo "<b>● Airport : </b> ". $Airport." <br>";}  ?> 
 <?php if( $government==""  ){}else{ echo "<b>● Near by Government project :</b> ". $government." <br>";}  ?> 
 <?php if( $private==""  ){}else{ echo "<b>● Near by private company :</b> ". $private." <br>";}  ?> 
 <?php if( $Other==""  ){}else{ echo "<b>● Any other informasion :</b> ". $Other." <br>";}  ?> 

<?php if( $thumall4=="") {} else { ?>
          				 <div class="item">
          				<embed src="<?php echo "profiles/".$thumall4; ?>" width="100%" ></div>
          				</div>
          				
          				<div>
          				    <a  href="<?php echo "profiles/".$thumall4; ?>" >
          				   <button type="button"  class="btn btn-danger btn-lg btn3d"  style="border-radius: inherit;-webkit-box-shadow: snow;">Download</button></a>  
          				</div>

          				<?php  } ?>


</div>
 </div>
 <?php } elseif ($a150=="Private") { ?>
 
 
 
 <div class="" style='text-transform: capitalize;' >

   <div >
       
   <?php if( $title==""  ){}else{ echo "<strong style='font-size:30px'>●   ". $title." </strong> <br>"; }  ?>
      <?php if( $Tsa==""  ){}else{ echo "<strong style='font-size:30px'> Rs ". $Tsa / "100000" ." lac </strong><br>";}  ?> 
      
      <?php if( $propertysale==""  ){}else{ echo "<b>● Property to sale  :</b> ". $propertysale."<br>";}  ?> 
 <?php if( $propertysppt==""  ){}else{ echo "<b>●  Property :</b> ". $propertysppt." <br>";}  ?> 
 <?php if( $Facingewns==""  ){}else{ echo "<b>● Facing :</b> ". $Facingewns." <br>";}  ?> 
 <?php if( $Ra==""  ){}else{ echo "<b>● Road Available :</b> ". $Ra." <br>";}  ?>
 <?php if( $sop==""  ){}else{ echo "<b>● Size (Width × Depth) :</b> ". $sop." sqft <br>";}  ?> 
 <?php if( $Rpsf==""  ){}else{ echo "<b>● Rate per Square feet :</b> ". $Rpsf." <br>";}  ?>
 <?php if( $a88==""  ){}else{ echo "<b>● Carpet Area :</b> ". $a88."sqft <br>";}  ?>

  <?php if( $a77==""  ){}else{ echo "<b>● Build-up Area :</b> ". $a77."sqft <br>";}  ?>
  <?php if( $a66==""  ){}else{ echo "<b>● Super Build-up area :</b> ". $a66."sqft <br>";}  ?>

 <?php if( $NONselectNegotiable==""  ){}else{ echo "<b>● Property Amount  :</b> ". $NONselectNegotiable."<br> ";}  ?> 
 

   <h6  class="card-title" >   <span class="loc"><a href="#"><i class="icon-map"></i>
LOCATION OF THE SITE</h6>
 <?php if( $Locality==""  ){}else{ echo "<b>●  Locality :</b> ". $Locality."<br>";}  ?> </a></span>
 <?php if( $LandMark==""  ){}else{ echo "<b>●  Land Mark  : </b> ". $LandMark."<br>";}  ?> 
 <?php if( $Pincode==""  ){}else{ echo "<b>● Pin code :  </b> ". $Pincode."<br>";}  ?> 
 <?php if( $CityTown==""  ){}else{ echo "<b>● City :</b> ". $CityTown." <br>";}  ?>
  <?php if( $State==""  ){}else{ echo "<b>● State :</b> ". $State." <br>";}  ?>
 <?php if( $Hospital==""  ){}else{ echo "<b>● Hospital :</b> ". $Hospital."<br>";}  ?> 
 <?php if( $School==""  ){}else{ echo "<b>● School  :</b> ". $School." <br>";}  ?> 
 <?php if( $Market==""  ){}else{ echo "<b>● Market : </b> ". $Market." <br>";}  ?> 
 <?php if( $Highway==""  ){}else{ echo "<b>● Highway : </b> ". $Highway." <br>";}  ?> 
 
 <?php if( $Railwaystation==""  ){}else{ echo "<b>● Railway Station :</b> ". $Railwaystation." <br>";}  ?> 
 <?php if( $Busstand==""  ){}else{ echo "<b>● Bus Stand :</b> ". $Busstand." <br>";}  ?> 
 <?php if( $Airport==""  ){}else{ echo "<b>● Near By Government Project :</b> ". $Airport." <br>";}  ?> 
 <?php if( $government==""  ){}else{ echo "<b>● Near By Private Company :</b> ". $government."<br>";}  ?> 
 <?php if( $private==""  ){}else{ echo "<b>● Any Other Informasion :</b> ". $private." <br>";}  ?> 
 <?php if( $thumall4=="") {} else { ?>
          				 <div class="item">
          				<embed src="<?php echo "profiles/".$thumall4; ?>" width="100%" ></div>
          				</div>
          				
          				<div>
          				    <a  href="<?php echo "profiles/".$thumall4; ?>" >
          				   <button type="button"  class="btn btn-danger btn-lg btn3d"  style="border-radius: inherit;-webkit-box-shadow: snow;">Download</button></a>  
          				</div>

          				<?php  } ?>

 
 

</div>
 </div>

   <?php } elseif ($a150=="Rent") { ?>
 
 
 
 <div class="" style='text-transform: capitalize;' >

   <div >
       
   <?php if( $title==""  ){}else{ echo "<strong style='font-size:20px'>●   ". $title." </strong> <br>"; }  ?>
      <?php if( $Tsa==""  ){}else{ echo "<strong style='font-size:20px'>  Rs ". $Tsa   ." / M </strong><br>";}  ?> 
      
      <?php if( $propertysale==""  ){}else{ echo "<b>● Property to Rent  :</b> ". $propertysale."<br>";}  ?> 
 <?php if( $propertysppt==""  ){}else{ echo "<b>●  Property Type :</b> ". $propertysppt."<br>";}  ?> 
 <?php if( $Ra==""  ){}else{ echo "<b>● Floor No :</b> ". $Ra." <br>";}  ?>
 <?php if( $sop==""  ){}else{ echo "<b>● No. Of Room  :</b> ". $sop." <br>";}  ?> 
 <?php if( $Rpsf==""  ){}else{ echo "<b>● Rate per Square feet :</b> ". $Rpsf." <br>";}  ?>
 <?php if( $a88==""  ){}else{ echo "<b>● No. Of Washroom :</b> ". $a88." <br>";}  ?>
  <?php if( $a66==""  ){}else{ echo "<b>● Washroom:</b> ". $a66." <br>";}  ?>
  <?php if( $a55==""  ){}else{ echo "<b>● Packing :</b> ". $a55." <br>";}  ?>

  <?php if( $a77==""  ){}else{ echo "<b>● Construction Area :</b> ". $a77." <br>";}  ?>
  <?php //if( $a66==""  ){}else{ echo "<b>● Super Build-up area :</b> ". $a66." <br><br>";}  ?>

 <?php if( $NONselectNegotiable==""  ){}else{ echo "<b>● House With Balcony  :</b> ". $NONselectNegotiable." <br>";}  ?> 
 

    <span class="loc"><a href="#"><i class="icon-map"></i>
 <?php if( $Locality==""  ){}else{ echo "<b>●  Locality :</b> ". $Locality." <br>";}  ?> </a></span>
 <?php if( $LandMark==""  ){}else{ echo "<b>●  Land Mark  : </b> ". $LandMark." <br>";}  ?> 
 <?php if( $Pincode==""  ){}else{ echo "<b>● Pin code :  </b> ". $Pincode." <br>";}  ?> 
 <?php if( $CityTown==""  ){}else{ echo "<b>● City :</b> ". $CityTown." <br>";}  ?>
  <?php if( $State==""  ){}else{ echo "<b>● State :</b> ". $State." <br>";}  ?>
 <?php if( $Hospital==""  ){}else{ echo "<b>● Hospital :</b> ". $Hospital." <br>";}  ?> 
 <?php if( $School==""  ){}else{ echo "<b>● School  :</b> ". $School." <br>";}  ?> 
 <?php if( $Market==""  ){}else{ echo "<b>● Market : </b> ". $Market." <br>";}  ?> 
 <?php if( $Highway==""  ){}else{ echo "<b>● Highway : </b> ". $Highway." <br>";}  ?> 
 
 <?php if( $Railwaystation==""  ){}else{ echo "<b>● Railway Station :</b> ". $Railwaystation."<br>";}  ?> 
 <?php if( $Busstand==""  ){}else{ echo "<b>● Bus Stand :</b> ". $Busstand." <br>";}  ?> 
 <?php if( $Airport==""  ){}else{ echo "<b>● Near By Government Project :</b> ". $Airport."<br>";}  ?> 
 <?php if( $government==""  ){}else{ echo "<b>● Near By Private Company :</b> ". $government."<br>";}  ?> 
 <?php if( $private==""  ){}else{ echo "<b>● Any Other Informasion :</b> ". $private." <br>";}  ?> 
 <?php if( $thumall4=="") {} else { ?>
          				 <div class="item">
          				<embed src="<?php echo "profiles/".$thumall4; ?>" width="100%" ></div>
          				</div>
          				
          				<div>
          				    <a  href="<?php echo "profiles/".$thumall4; ?>" >
          				   <button type="button"  class="btn btn-danger btn-lg btn3d"  style="border-radius: inherit;-webkit-box-shadow: snow;">Download</button></a>  
          				</div>

          				<?php  } ?>

 
 

</div>
 </div>
   <?php  }?>
   
    		</p>				    
    		</div>				    
    	
    					
          		<!--<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">-->
          		<!--	<h3 class="mb-4">Take A Tour</h3>-->
          		<!--	<div class="block-16">-->
		          <!--    <figure>-->
		          <!--      <img src="images/properties-6.jpg" alt="Image placeholder" class="img-fluid">-->
		          <!--      <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>-->
		          <!--    </figure>-->
		          <!--  </div>-->
          		<!--</div>-->

          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>
          		
          		<?php if($a150=="Rent"){  } else { 
          		
          		if( $Pincode==""  ){}else{  ?> 
 
          		<div class=" properties-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Related Properties</h4>
          			<div class="row">
          			    
          			      <?php  
          include("db/connction.php"); 
    
          $sql ="SELECT * FROM `property` WHERE `Pincode`='$Pincode' and `a130`!='$a130'  ORDER BY `id` DESC LIMIT 0,2 ";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){  
          ?>
          				<div class="col-md-6 ftco-animate">
				    				<div class="properties">
				    					<a href="property-single.php?single=<?php echo $row['a130']; ?>"  class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo "profiles/". $row['thumall'];?>);">
    				        		<div class="icon d-flex justify-content-center align-items-center">
    				            			<span class="icon-search2"></span>
                                            </div>
    			                    		</a>
				    					<div class="text p-3">
 <?php if($row['a150'] == "Rent" ){ ?>
    						<span class="status rent" style="background-color: #ff8f56;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;color:white;">Rent</span>
    						<?php }else { ?>
    						<span class="status sale" style="background-color: #26baee;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;color:white;">Sale</span><?php }?>
    						
    							<div class="d-flex">
    							<div class="one">
		    						<h3><a href="property-single.html"><?php echo $row['title']; ?></a></h3>
		    						<p> <?php echo $row['propertysppt']; ?> </p>
	    						</div>
	    						<div class="two" style="padding-left: initial;">
                                <?php if($row['a150'] == "Rent" ){ ?>
	    							<span class="price"><?php echo "Rs:".$row['Tsa']  . "\M";?> </span>
	    						    						<?php } else { ?>
		    							<span class="price"><?php echo "Rs:".$row['Tsa'] / "100000" . "lac";?> </span>

	                        	<?php } ?>    							</div>
    						</div>
    						    
    						
    						 <?php if($row['a150'] == "Rent" ){ ?>

    						<p><?php echo $row['title']; ?></p>
    						<?php } else { ?>
    						<p><?php echo $row['a11']; ?></p>
                        	<?php } ?>

    						<hr>
    						
    						<div class="d-flex">
    						        						<p class="bottom-area d-flex">
    						     <?php if($row['a150'] == "Rent" ){ ?>
    							<span><i class="flaticon-selection" ></i><?php echo $row['a77'] ; ?> </span>
    							<?php } else {?>
    					    	<span><i class="flaticon-selection" ></i><?php echo $row['sop']; ?> </span>

    						<?php	}?> 
    						
    						
    						
    						
    							    						     <?php if($row['a150'] == "Rent" ){?>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> <?php echo   $row['a88'];  ?>  </span> 

    							<span><i class="flaticon-bed"></i> <?php echo $row['sop'];  ?> </span>
    							<?php } ?>
    						</p>

    						    
				    						
				    					</div>
				    				</div>
				    			</div>
				    			</div>
				    			    			<?php // }?>

          			<!--</div>-->
          		<!--</div>-->
          		<?php } } } ?>

          	</div>
          </div> <!-- .col-md-8 -->
          <!--<div class="col-lg-4 col-lg-4 sidebar ftco-animate fadeInUp ftco-animated">-->
          <!--  <div class="sidebar-box">-->
          <!--    <form action="#" class="search-form">-->
          <!--      <div class="form-group">-->
          <!--        <span class="icon fa fa-search"></span>-->
          <!--        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">-->
          <!--      </div>-->
          <!--    </form>-->
          <!--  </div>-->
          <!--  <div class="sidebar-box ftco-animate">-->
          <!--    <div class="categories">-->
          <!--      <h3>Categories</h3>-->
          <!--      <li><a href="searching.php">Properties <span>(12)</span></a></li>-->
          <!--      <li><a href="searching.php">Home <span>(22)</span></a></li>-->
          <!--      <li><a href="searching.php">House <span>(37)</span></a></li>-->
          <!--      <li><a href="searching.php">Villa <span>(42)</span></a></li>-->
          <!--      <li><a href="searching.php">Apartment <span>(14)</span></a></li>-->
          <!--      <li><a href="searching.php">Condominium <span>(140)</span></a></li>-->
          <!--    </div>-->
          <!--  </div>-->

          <!--  <div class="sidebar-box ftco-animate">-->
          <!--    <h3>Recent Blog</h3>-->
          <!--    <div class="block-21 mb-4 d-flex">-->
          <!--      <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>-->
          <!--      <div class="text">-->
          <!--        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>-->
          <!--        <div class="meta">-->
          <!--          <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>-->
          <!--          <div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
          <!--          <div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="block-21 mb-4 d-flex">-->
          <!--      <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>-->
          <!--      <div class="text">-->
          <!--        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>-->
          <!--        <div class="meta">-->
          <!--          <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>-->
          <!--          <div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
          <!--          <div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="block-21 mb-4 d-flex">-->
          <!--      <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>-->
          <!--      <div class="text">-->
          <!--        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>-->
          <!--        <div class="meta">-->
          <!--          <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>-->
          <!--          <div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
          <!--          <div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->

          <!--  <div class="sidebar-box ftco-animate">-->
          <!--    <h3>Tag Cloud</h3>-->
          <!--    <div class="tagcloud">-->
          <!--      <a href="#" class="tag-cloud-link">dish</a>-->
          <!--      <a href="#" class="tag-cloud-link">menu</a>-->
          <!--      <a href="#" class="tag-cloud-link">food</a>-->
          <!--      <a href="#" class="tag-cloud-link">sweet</a>-->
          <!--      <a href="#" class="tag-cloud-link">tasty</a>-->
          <!--      <a href="#" class="tag-cloud-link">delicious</a>-->
          <!--      <a href="#" class="tag-cloud-link">desserts</a>-->
          <!--      <a href="#" class="tag-cloud-link">drinks</a>-->
          <!--    </div>-->
          <!--  </div>-->

          <!--  <div class="sidebar-box ftco-animate">-->
          <!--    <h3>Paragraph</h3>-->
          <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </section> <!-- .section -->
		
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

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
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