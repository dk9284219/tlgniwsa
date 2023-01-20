<?php
error_reporting(0);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> login</title>
	 <!--Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 <!--jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <!--Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!--Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	 <!--costom css -->
	   <link rel="stylesheet" href="style/admin.css"> 
</head>
<body>
  <!-- <div class="container my-4">

  <form action="login.php" method="post">
    <h3>Admin Login</h3>
    <hr>
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="Username"  name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  
  <input type="submit" name="submit" class="btn btn-primary" value="login">
</form>
   	
   </div> -->

</body>
</html>


<?php
$ipaddress = getenv("REMOTE_ADDR") ;
"Your IP Address is " . $ipaddress;
                        
                            include("db/connction.php"); 

if ($_SERVER['REQUEST_METHOD']) {
  
         $sql ="INSERT INTO `ipadd` ( `ipaddress`,`page`, `date`) VALUES ( '$ipaddress','login.php', current_timestamp())";
        $result = mysqli_query($conn,$sql);
         if($result){
          echo '<script language="javascript">';
              echo '</script>';
                            
                    }
}
?>

<?php
//  include('db/connection.php');
include("db/connction.php");
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM `Registertlg` where email='$email' and passw='$password'");
if($query){
  if(mysqli_num_rows($query)>0){
      

  
      
            // while($row = mysqli_fetch_array($query))
            // {
            //      $pass = $row['pass'];
            // }    

            // $_SESSION['teacherlogin']=$passstudent;




            
            //   <td><a href='event-update.php?edit=$email' class='btn btn-info'>edit </a></td>

            //   </tr>";
            
                $_SESSION['email']=$email;

            
            echo '<script language="javascript">';
                  echo 'alert("successfully opened your account  ");';
                  
                  echo 'window.location="profiles/index.php";';
                  echo '</script>';  
  
  
    // header('location:plot.php');
    
    
    
    
  }else{




      

    echo '<script language="javascript">';
echo 'alert("  Invalid password But you password  " );';
echo 'window.location="logines.php";';

    echo '</script>';
   

  }
}else{header('location:logines.php');}

}
  // if (isset($_POST['submit'])) {
  //   $email=$_POST['email'];
  //  $password=$_POST['password'];

  //   $query=mysqli_query($conn,"select * from admin_login where name='$email' AND password='$password' ");

  //  if ($query) {
  //  	  if (mysqli_num_rows($query)>0) {
  //         $_SESSION['email']=$email;
        
  //  	  	  header('location:home.php');
  //     }else{
  //     	echo "<script>  alert('Invalid Credentails,Please Try Again')</script>";
  //     }
  //  }

  	
  // }


?>

