
<?php 
                            // include("pupo/index.php");

                            error_reporting(0);

session_start();
if ( $_SESSION['email']==true) {
    $gg = $_SESSION['email'];
}




// $ipaddress = getenv("REMOTE_ADDR") ;
// "Your IP Address is " . $ipaddress;

  
//  $ghfgh = "http://ip-api.com/json/".$ipaddress;
//  $hfgh = file_get_contents($ghfgh);
//  $gfg= json_decode($hfgh);
// if ($gfg->status =="success" ){
//         $hfg =  $gfg->country ." ". $gfg->regionName ." (". $gfg->region .") ". $gfg->city ." ". $gfg->zip  ;
// }else {
//     $hfg = " location not found";
// }
                        
//                             include("/db/connction.php"); 

// if ($_SERVER['REQUEST_METHOD']) {
  
//          $sql ="INSERT INTO `ipadd` ( `ipaddress`,`Address`,`page`, `date`) VALUES ( '$ipaddress','$hfg','index.php', current_timestamp())";
//         $result = mysqli_query($conn,$sql);
//          if($result){
//           echo '<script language="javascript">';
//               echo '</script>';
                            
//                     }
// }
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
  <body>

 

    <?php include("import/headers.php"); ?>

    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
              	      <?php  
    		      
             include("db/connction.php"); 
                 		   $hjh=  "SELECT * FROM `ipadd` WHERE `ipaddress`='$ipaddress'";
          $result = mysqli_query($conn,$hjh);
          while($row = mysqli_fetch_assoc($result)){
         $fgjghjhfjgh= $row['unick'];
        $fgjgfjgh= $row['page'];
         
          }	
          if($fgjghjhfjgh =="track"){
          
          include("db/connction.php"); 
        		   $sql ="SELECT * FROM `property`  WHERE `a130`='$fgjgfjgh' ORDER BY `id` DESC LIMIT 0,1 ";

          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
              $Aproved =$row['aprover'];
          if($Aproved == "Aproved"){ ?>
          <div class="col-md-6 text p-4 ftco-animate">
            <h1 class="mb-3"><?php echo $row['title']; ?>  </h1>
           <p> <span class="location d-block mb-3"><i class="icon-my_location"></i>     
              <?php echo $row['a11']; ?> </span> </p>
            <a href="property-single.php?single=<?php echo $row['a130']; ?>"  class="btn-custom p-3 px-4 bg-primary"><?php echo $row['title']; ?> <span class="icon-plus ml-1"></span></a>
          </div>
          <?php }}} else {   ?>
                    <div class="col-md-6 text p-4 ftco-animate">
            <h1 class="mb-3">tlg niwas  </h1>
           <p> 
           <a href="Customer/"> <button type="button" class="btn btn-primary" style="width:100%">I am Customer <span class="icon-plus ml-1"></span> </button> </a></p>
                      <a href="Builder/"> <button type="button" class="btn btn-primary" style="width:100%"> I am Builder  <span class="icon-plus ml-1"></span> </button> </a></p>

            <a href="#"  class="btn-custom p-3 px-4 bg-primary"> View Details <span class="icon-plus ml-1"></span></a>
          </div>
          <?php  } ?>

        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
          <div class="col-md-6 text p-4 ftco-animate">
            <h1 class="mb-3">why TLG Niwas</h1>
            <p>A product of True_Leader_Group We are fast growing real estate brokerage company in Uttar Pradesh. Quick solution for both customer and real estate workers.</p>
            <a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-search" style="padding-top: 2%;padding-bottom: 1%;">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12 search-wrap">
						<h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Search Property</h2>
					<form autocomplete="off" action="/Search/" method="Get" name="categoryfrom" onsubmit="return validatefrom()" enctype="multipart/form-data">
  <div class="form-group autocomplete">
      
 <div style="display: -webkit-box;">
     <div style="width: 90%;">  <input type="search"  name="Location" class="form-control" id="myInput" placeholder="Choose your location" required style="width: 100%;border-start-start-radius: 100px;border-bottom-left-radius: 100px;">  </div>
       <!--<input type="submit"  class="btn btn-outline-primary md-3" value="submit"> -->
<div>
          <button type="submit" class="btn  md-3" value="submit" style="border-start-end-radius: 100%;border-end-end-radius: 100%;"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button></div>

</div>
  </div>

</form>
		
			
	
		
					</div>
	    	</div>
	    </div>
    </section>


    <section class="ftco-section bg-light" style="display: none;">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-pin"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Find place any where in India.</h3>
                <p>TLG NIWAS is working to the all over india as real estate consultant. We work with our channel partner as well we search on demand according to clients. <br>

</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">We have experience and professional team</h3>
                <p> Team work is key to solve biggest problem of society as well as stand a community of workaholic. We are present will professional to provide you India's best property.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-house"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Buy & Invest property</h3>
                <p>Property is only a product of purchase it's world best investment era. Physical assets are the real assets and property on the first place from ancient time. So for the purpose for investment real estate is king of investment now a days. 
</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-purse"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Making Money</h3>
                <p>If you are interested to work with us, you are most welcome we train to the beginners the then work with them. Any one can make lot of money by working with honesty in this industry.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-properties">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Recent Posts</span>
            <h2 class="mb-4">Recent Properties</h2>
          </div>
        </div>
        

    		<div class="row">
    			<div class="col-md-12">
    				<div class="properties-slider owl-carousel ftco-animate">
    				      <?php  
    		      $sql ="SELECT * FROM `property`  ORDER BY `id` DESC; ";
  
    		     
    		   
          include("db/connction.php"); 
    
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
              $Aproved =$row['aprover'];
          if($Aproved == "Aproved"){ ?>
    					<div class="item">
		    				    			<div class="properties  <?php echo $row['a150'];?>">
    					<a href="property-single.php?single=<?php echo $row['a130']; ?>"  class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo "profiles/". $row['thumall'];?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>

    					    <?php if($row['a150'] == "Rent" ){ ?>
    						<span class="status rent" style="background-color: #ff8f56;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;color:white;">Rent</span>
    						<?php }else { ?>
    						<span class="status sale" style="background-color: #26baee;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;color:white;">Sale</span><?php }?>

    						<div class="d-flex">
    							<div class="one">
		    						<h3 style="font-size: 14px;"><a href="property-single.php?single=<?php echo $row['a130']; ?>"><?php echo $row['title']; ?></a></h3>
		    						<p> <?php echo $row['propertysppt']; ?> </p>
	    						</div>
	    						<div class="two" style="padding-left: initial;color: red;margin-left: auto;">
	    						    
	    						    					     <?php if($row['a150'] == "Rent" ){ ?>
	    							<span class="price"><?php echo "Rs:".$row['Tsa']  . "\M";?> </span>
	    						    						<?php } else { ?>
		    							<span class="price"><?php echo "Rs:".$row['Tsa'] / "100000" . "lac";?> </span>

	                        	<?php } ?>

	    							
    							</div>
    						</div>
    						
    						<!--Rs ". $Tsa / "100000" ." lakh-->
    						
    						    	            <div class="product-details">
					     <?php if($row['a150'] == "Rent" ){ ?>

    						<p><?php echo $row['title']; ?></p>
    						<?php } else { ?>
    						<p><?php echo $row['a11']; ?></p>
                        	<?php } ?>
                            </div>
    						<hr>
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
	    					<?php }}?>
    		
	    			</div>
    			</div>
    		</div>
    		
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4">Most Recommended Properties</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    				      <?php  
    		      $sql ="SELECT * FROM `property` ORDER BY `id` DESC LIMIT 0,8;  ";
  
    		     
    		   
          include("db/connction.php"); 
    
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
              $Aproved =$row['aprover'];
          if($Aproved == "Aproved"){ ?>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
		    				    			<div class="properties  <?php echo $row['a150'];?>">
    					<a href="property-single.php?single=<?php echo $row['a130']; ?>"  class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo "profiles/". $row['thumall'];?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>

    					    <?php if($row['a150'] == "Rent" ){ ?>
    						<span class="status rent" style="background-color: #ff8f56;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;color:white;">Rent</span>
    						<?php }else { ?>
    						<span class="status sale" style="background-color: #26baee;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;color:white;">Sale</span><?php }?>

    						<div class="d-flex">
    							<div class="one">
		    						<h3 style="font-size: 14px;"><a href="property-single.php?single=<?php echo $row['a130']; ?>"><?php echo $row['title']; ?></a></h3>
		    						<p> <?php echo $row['propertysppt']; ?> </p>
	    						</div>
	    						<div class="two" style="padding-left: initial;color: red;margin-left: auto;">
	    						    
	    						    					     <?php if($row['a150'] == "Rent" ){ ?>
	    							<span class="price"><?php echo "Rs:".$row['Tsa']  . "\M";?> </span>
	    						    						<?php } else { ?>
		    							<span class="price"><?php echo "Rs:".$row['Tsa'] / "100000" . "lac";?> </span>

	                        	<?php } ?>

	    							
    							</div>
    						</div>
    						
    						<!--Rs ". $Tsa / "100000" ." lakh-->
    						
    						    	            <div class="product-details">
					     <?php if($row['a150'] == "Rent" ){ ?>

    						<p><?php echo $row['title']; ?></p>
    						<?php } else { ?>
    						<p><?php echo $row['a11']; ?></p>
                        	<?php } ?>
                            </div>
    						<hr>
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
	    					<?php }}?>
    		


    		</div>
    	</div>
    </section>

  
		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Properties</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Agents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="25">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light" >
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-pin"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Find place any where in India.</h3>
                <p>TLG NIWAS is working to the all over india as real estate consultant. We work with our channel partner as well we search on demand according to clients. <br>

</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">We have experience and professional team</h3>
                <p> Team work is key to solve biggest problem of society as well as stand a community of workaholic. We are present will professional to provide you India's best property.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-house"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Buy & Invest property</h3>
                <p>Property is only a product of purchase it's world best investment era. Physical assets are the real assets and property on the first place from ancient time. So for the purpose for investment real estate is king of investment now a days. 
</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-purse"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Making Money</h3>
                <p>If you are interested to work with us, you are most welcome we train to the beginners the then work with them. Any one can make lot of money by working with honesty in this industry.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <!--<div class="item">-->
		              <!--  <div class="testimony-wrap py-4 pb-5">-->
		              <!--    <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">-->
		              <!--      <span class="quote d-flex align-items-center justify-content-center">-->
		              <!--        <i class="icon-quote-left"></i>-->
		              <!--      </span>-->
		              <!--    </div>-->
		              <!--    <div class="text text-center">-->
		              <!--      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>-->
		              <!--      <p class="name">Roger Scott</p>-->
		              <!--      <span class="position">Clients</span>-->
		              <!--    </div>-->
		              <!--  </div>-->
		              <!--</div>-->
		              <!--<div class="item">-->
		              <!--  <div class="testimony-wrap py-4 pb-5">-->
		              <!--    <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">-->
		              <!--      <span class="quote d-flex align-items-center justify-content-center">-->
		              <!--        <i class="icon-quote-left"></i>-->
		              <!--      </span>-->
		              <!--    </div>-->
		              <!--    <div class="text text-center">-->
		              <!--      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>-->
		              <!--      <p class="name">Roger Scott</p>-->
		              <!--      <span class="position">Agent</span>-->
		              <!--    </div>-->
		              <!--  </div>-->
		              <!--</div>-->
		              <!--<div class="item">-->
		              <!--  <div class="testimony-wrap py-4 pb-5">-->
		              <!--    <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">-->
		              <!--      <span class="quote d-flex align-items-center justify-content-center">-->
		              <!--        <i class="icon-quote-left"></i>-->
		              <!--      </span>-->
		              <!--    </div>-->
		              <!--    <div class="text text-center">-->
		              <!--      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>-->
		              <!--      <p class="name">Roger Scott</p>-->
		              <!--      <span class="position">Client</span>-->
		              <!--    </div>-->
		              <!--  </div>-->
		              <!--</div>-->
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(/images/agent/a21rt.jpeg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">I am happy to taken service by tlg niwas. The location of property and presentation was nice. I wish for growth and happy journey for this company.</p>
		                    <p class="name">Amrendra Kumar.</p>
		                    <span class="position">Agent</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/agent/a21.jpeg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">According to me tlg niwas is doing good work for the customer. This is working as professional way. I am very happy and impressed with work and presentation of this organization. </p>
		                    <p class="name">Prabhu Singh </p>
		                    <span class="position">Agent</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Read Articles</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
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


  <!-- loader -->
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = [
    
     <?php  
          include("db/connction.php"); 
          $sql ="SELECT * FROM `searchauto` ";
          $result = mysqli_query($conn, $sql);
          while($rowgfg = mysqli_fetch_assoc($result)){ 
              echo '"'.$rowgfg['searching'].'",';}
              ?>
    
    ];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
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