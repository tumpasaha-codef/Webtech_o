<?php require_once './controller/register.php'?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
       <link rel="stylesheet" href="signup.css">
<style>
.error {color: #FF0000;}
</style>
<script src="./js/app.js"></script>
</head>
<body>
   
          <h3 align= "right">

      
          <a href="login.php">Login </a>
        <hr>
            </h3> 
            </div> 

           <div align="center";>
           <fieldset style="width:25%;"> 

          <legend align='center'> <h2> New User Sign Up Form </h2> </legend>
          <form method="post" name="form">
             
             

         <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>User Name<span style="color: rgb(255, 255, 255);">*********</span>: </label> </b><input type="text" name="username" id= "username" onblur="checkUsername()">
         <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
         <br> <br> 
           
         <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>E-mail<span style="color: rgb(255, 255, 255);">***************</span>: </label> </b><input type="text" name="email" id= "email" onblur="checkEmail()">
         <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
         <br> <br> 

         <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Password<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b><input type="text" name="password" id= "password" onblur="checkPassword()">
         <span class="error" id="passwordErr"><?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
         <br> <br> 

           
              <input type="submit" name="submit" value="Submit">

              </fieldset>
             </div>
         </form>
         <div align="center"><hr>
         
       </div>
</body>
</html>