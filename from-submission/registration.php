<<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
</head>
<body>


 <?php

 $firstName = $lastName = $gen = $dob = $email = $username = $pwd = "";
$firstNameErr = $lastNameErr = $genErr = $dobErr =$emailErr= $usernameErr = $pwdErr = "";

$flag = false;
$successfulMessage = $errorMessage = "";


if($_SERVER['REQUEST_METHOD'] === "POST") {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gen = $_POST['gen'];
$dob = $_POST['dob'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];


 if(empty($firstName)) {
$firstNameErr = "Required";
$flag = true;
}
if(empty($lastName)) {
$lastNameErr = "Required";
$flag = true;
}
if(empty($gen)) {
$genErr = "Required";
$flag = true;
}
if(empty($dob)) {
$dobErr = "Required";
$flag = true;
}if(empty($username)) {
$username = "Required";
$flag = true;
}if(empty($pwd)) {
$pwdErr = "Required";
$flag = true;
}

}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


?>

<p><span class="error"><h3>Form Submission</h3></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <fieldset>
    <legend><label>***Basic Information***</label></legend>
  First Name: <input type="text" name="firstName">
  <span class="error">* <?php echo $firstNameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lastName">
  <span class="error">* <?php echo $lastNameErr;?></span>
  
  <br><br>
  Gender:
  <input type="radio" name="gen" value="female">Female
  <input type="radio" name="gen" value="male">Male
  <input type="radio" name="gen" value="other">Other
  <span class="error">* <?php echo $genErr;?></span>
  <br><br>

  Date of Birth: <input type="date" name="dob"
            min="1990-01-01" max="2050-12-31">
            <span class="error">* <?php echo $dobErr;?></span>

       <br><br> 
        Select Religion: 
           <select>  
           <option value = "Islam"> Islam  
           </option>  
           <option value = "Hindus"> Hindus   
           </option>  
           <option value = "Others"> Others  
           </option> 
       </select>

       </fieldset>
       <br><br>
    <fieldset>
      <legend><label>***Contact Information***</label></legend>

Present Address:
    <textarea id="comment1" name="comment1"></textarea>

    <br><br>

Permanent Address:</label>
    <textarea id="comment2" name="comment2"></textarea>

    <br><br>
    
    Phone Number:      <input type="tel" id="phone" name="phone"

    

</form>

</body>
</html>