<?php
require_once './model/model.php';

 
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
 
    if (isset($_POST['submit']) ) {
      $data['email'] = $_POST['email'];
      $data['username'] = $_POST['username'];
      $data['password'] = $_POST['password'];
      
    
      if (addUser($data)) {
        echo 'Successfully added!!';
        echo "<a href ='../login.php'>Login</a>";
      }
    } else {
      echo 'You are not allowed to access this page.';
    }
  
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
  ?> 