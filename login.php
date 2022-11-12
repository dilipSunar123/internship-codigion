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
  <div class="brand-title">LOGIN</div>

  <div class="inputs">
    <label>EMAIL</label>
    <input type="email" placeholder="example@dev.com" name="email" />
    <label>PASSWORD</label>
    <input type="password" placeholder="Enter Your Password" name="password" />
	
    <button type="submit" name="login">LOGIN</button>
	</div>
	
  <a href="register.php" target= "blank" >Don't  Have An Account</a>
</form>
</body>
</html>


 <?php  
 
    session_start();
	include("connection.php");
	
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["password"]))  
           {  
                echo "All fields are required";  
           }  
           else  
           {  
                $query = "SELECT * FROM sign_up WHERE email = :email AND password = :password";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'     =>     $_POST["email"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];  
                     header("location:test.php");  
                }  
                else  
                {  
                echo '<script>alert("Wrong Credentials")</script>';  
                }  
           }  
      }  

 ?> 