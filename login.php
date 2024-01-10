
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x.icon" href="images/booki.png" >
   
        <link rel="stylesheet" href="css/CréationCompte.css"/>
        <title> BookiTbibek </title>
        <link rel="icon" type="image/x-icon" href="testl.png">

    </head>
    <body>
        <div class="login-box">
            <form action="#" method="POST">
            <h1>Log in</h1>
            <form class="modif-form1">
                <label>Email</label>
                <input type="email" placeholder="enter your email" id="email" name="email">
                <label>Password</label>
                <input type="password" placeholder="enter your password" id="password" name="password">
                <input type="button" value="Login">
                <center><p class="para-2"> Don't have an account ? <a href="CréationCompte.html" ><b>Sign in here</b></a></p> </center>  
            </form>
        </div>
        
        </body>
        </html>

        <?php

$host="localhost";
$user="root";
$password="";
$db="connectdb";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(['email'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from register where email ='".$email. "' AND password='".$password.'" limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " You have succesfully Logged in"
        exit();

        else{
        echo " You have entered incorrect password"
        exit()
        }





    }
}

 ?>