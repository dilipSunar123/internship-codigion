<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<form method="POST">

<div class="container">
  <div class="brand-title">Register</div>

  <div class="inputs">
    <label>EMAIL</label>
    <input type="email" placeholder="example@dev.com" name="email"/>
    <label>PASSWORD</label>
    <input type="password" placeholder="Enter Your Password"  name="password"/>
	 <label>STATUS</label>
    <input type="number" placeholder="status" name="status" />
    <button type="submit" name="register">REGISTER</button>
	</div>
	
  <a href="login.php" target= "blank" >Already Have An Account</a>
</form>
</body>
</html>

<?php
		 include("connection.php");
		 
		 
		
					 
						 if(isset($_POST['register'])){
						 $sql = "insert into sign_up(email,password,status) 
						 value('".$_POST['email']."','".$_POST['password']."','".$_POST['status']."')";
	                     $stmt = $conn->prepare($sql);
						 $sql_run = $stmt->execute(array("email"=>$_POST['email'],"password"=>$_POST['password'],"password"=>$_POST['status']));
						 
						 if($sql_run)
						 {
							 
							 echo '<script> alert("Register User Succesfully") </script>';
							 //header("location:login.php");
						 }
						 else 
							 echo "error";
						
						 }
					 
					 
					 
					 ?>