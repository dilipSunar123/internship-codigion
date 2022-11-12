
 <?php  
 
    session_start();
	include("db/connection.php");
	
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