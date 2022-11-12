			<?php
             $host="localhost";
			 $dbname = "api";
			 $user = "root";
			 $password = "";
			 
			 try{
				 $conn= new PDO("mysql:host=localhost;dbname=api",$user,$password);
			
			 }catch(PDOException $e){
			 echo$e;
	 
			 }
			 //cho"OK";
			

			?>