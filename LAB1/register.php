<?php
 $host="localhost";
 $user="root";
 $password="";
 $database="registration";
 $con=mysqli_connect($host,$user);
 if (!$con){
     die('Could not connect: ' . mysqli_connect_error() );
 }
 mysqli_select_db($con,$database);
 if(isset($_POST['submit'])){

    $uname=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $password2=$_POST['pass2'];
    $sql_check="select * FROM user WHERE (email='$email');";
    $res_check=mysqli_query($con,$sql_check);
    $row=mysqli_fetch_assoc($res_check);
    if($email==isset($row['email']))
    {
            echo "email already exists";
    }
    else{

        $sql="insert into user(email,name,password) values ('".$email."', '".$uname."', '".$password."')";
        $res=mysqli_query($con,$sql);
      
        
       
        if($res){
            
            echo "Welcome $uname";
        
        }
        else{
            echo "There is some problem in the registeration, try again later";
        }

    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration_page</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="home">
       
        <div class="register">
            <div class="title">
                <h2>Registeration</h2>
            </div>
            <br>
            <br>
            <form action="" id="registerform" method="post">
                <label for="username" style="margin-right: 53px;">Username </label>
                <input placeholder="Enter your username" type="text" name="username" id="username">
                <br>
                <br>
                <label for="email" style="margin-right: 80px;">Email </label>
                <input placeholder="Enter your email" type="email" name="email" id="email">
                <br>
                <br>
                <label for="pass" style="margin-right: 60px;">password</label>
                <input placeholder="Enter your password " type="password" name="pass" id="pass">
                <br>
                <br>
                <label for="pass2">Confirm password</label>
                <input  placeholder="Enter your password " type="password" name="pass2" id="pass2">
                <br> 
                <br>
                <button type="submit" name=submit  onclick=" return  validatereg() ">Register</button>
            </form>
        </div>

    </div>
<script src="js/validate.js"></script>
</body>

</html>
