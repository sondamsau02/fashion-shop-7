<?php
    include '../classes/adminlogin.php';
?>
<?php
   $class = new adminlogin();
   if($_SERVER['REQUEST_METHOD'] === 'POST') {
       $adminUser = $_POST['adminUser'];
       $adaminPass = md5($_POST['adminPass']);

       $login_check = $class->login_admin($adminUser,$adaminPass);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class = "container">
    <section id = "content">
        <form action="login.php" method="post">
            <h1>Admin Login</h1>
           <span><?php

           if(isset($login_check)){
               echo $login_check;
           }
           ?></span>

        <div>
                <input type="text" placeholder="Username" required="" name="adminUser"/>
                </div>
                <div>
                <input type="password" placeholder="Password" required="" name="adminPass"/>
                </div>
                <div>
                    <input type="submit" value="Log in" />
                </div>
            </form><!-- form -->
            <div class="button">
                <a href="#">Training with live project</a>
            </div><!--button -->
        </section><!-- content -->
</div><!--container -->
</body>
</html>