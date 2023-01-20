  
<?php
error_reporting(0);

        // connecting to database conting 
        include("db/connction.php");
         if(isset($_POST['submit'])){
                  $isponsordw=$_POST['sponsor'] ;
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
               

 $sql = "INSERT INTO `Registertlg` (`title`,  `An`, `email`, `phone`, `passw`, `pass`,  `color`) VALUES ( '$title',  '$isponsordw', '$email','$phone',  '$password', '$pass',  'blueviolet');";
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
echo 'window.location="logines.php";';
    echo '</script>';
    

              echo '</script>'; }}
            
           else{ echo "<script>             alert('sorry please call +91-7054633323!');
            </script>";
}
           }
           }

        ?>
