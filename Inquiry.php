
<?php
error_reporting(0);

        // connecting to database conting 
        include("db/connction.php");
         if(isset($_POST['submit'])){
             //     $idw=$_POST['id'] ;

             
                            $name = $_POST['name'];     
                            $phone= $_POST['phone'];
                            $Description= $_POST['Description'];  
                            $Des = $_POST['Des'];


              $sql = "INSERT INTO `contpro` (`name`,`phone`, `Description`, `Des`) VALUES ( '$name', '$phone', '$Description', '$Des')";
             $result = mysqli_query($conn,$sql);
             if($result){ 
             if($Des=="54654654654"){ 
                 
                echo  $data .= '<div class="text-center">
							
							

										 

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_live_QacrOdeYtwvats", // Enter the Key ID generated from the Dashboard
    "amount": "' . $grand_total*100 . '", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "' . $name . '",
    "description": "TLG Niwas",
    "image": "https://tlgniwas.com/logo1.png",  
    "orderid": "'.$date.'",

   
    "handler": function (response){
alert("Success Payment");
window.location="https://www.tlgniwas.com/";  },
    "prefill": {
        "name": "' . $name . '",
        "contact": "91' . $phone . '",
        "email": " "
    },
    "notes": {
      
         "Rent": "' . $Description . '",
            "name": "' . $name . '",
        "contact": "' . $phone . '"

    },
    "theme": {
        "color": "#0aa2e7"
    }
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    

</script>	';
                 
             }else{
             echo "<script>             alert('Successfully Submitted!');
            </script>";
              echo '<script language="javascript">';
              echo 'window.location="index.php";';
              echo '</script>';}
              
                 
             }
           else{ echo "<script>             alert('sorry!');
            </script>";

           }
           }

        ?>