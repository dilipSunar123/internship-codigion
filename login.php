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
        $password = md5($_POST['password']);
        $stmt = $conn->prepare("SELECT id FROM sign_up WHERE email = ? AND password = ? AND status='1'");  
        $stmt->bind_param("ss", $_POST['email'], $password);
        $stmt->execute(); 
        $id=$stmt->bind_result($id);
        $stmt->fetch();
            if($id > 0)  
            {  
                $R['email'] = $_POST["email"];  
                $R['ERR'] = false;
                $R['MSG'] = "Sussess";
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