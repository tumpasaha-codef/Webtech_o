<?php 

session_start();

require_once './model/model.php';

if (isset($_POST['username'])) {
	$data = searchUser($_POST['username']);
		if($data!=null)
		{
			$username= $data["Username"];
			$pass = $data["Password"];
			$id = $data["ID"];

			if($_POST['username']==$username && $_POST['password']==$pass)
			{
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $id;
				header("location:./index.php");
			}
        }


    
    


}

 ?>