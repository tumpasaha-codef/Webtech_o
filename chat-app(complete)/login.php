<?php require_once './controller/login.php'?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
       <link rel="stylesheet" href="signup.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
   
          <h3 align= "right">

      
          <a href="login.php">Login </a>
        <hr>
            </h3> 
            </div> 

           <div align="center";>
           <fieldset style="width:25%;"> 

          <legend align='center'> <h2> Login </h2> </legend>
          <form method="post" name="form">
             
             

         <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>User Name<span style="color: rgb(255, 255, 255);">*********</span>: </label> </b><input type="text" name="username">
         <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
         <br> <br> 
           

         <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Password<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b><input type="text" name="password">
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