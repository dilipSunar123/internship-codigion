<?php
		include("db/connection.php");
		 
	
				  	
		if ($_POST['email'] == "") {
			 $R['ERR'] = true;
			 $R['MSG'] = "Incorrect Email.";
			 goto END;
		}
		if ($_POST['password'] == "") {
			$R['ERR'] = true;
			$R['MSG'] = "Incorrect Password.";
			goto END;
		}
	
		// it will execute the query
        $password=md5($_POST['password']);
        $stmt = $conn->prepare("INSERT INTO sign_up (email, password, status) VALUES (?, ?, '1')");
		$stmt->bind_param("ss", $_POST['email'], $password);
		$sql_run=$stmt->execute();

		if($sql_run)
		{
			 $R['ERR'] = true;
			 $R['MSG']="Sussess";
			 goto END;
		}
		else 
		{
			 $R['ERR'] = true;
			 $R['MSG']="Error";
			 goto END;
		}
			  
		END:
		header("Content-Type: application/json");
		echo json_encode($R);
		return;
					 
						
?>