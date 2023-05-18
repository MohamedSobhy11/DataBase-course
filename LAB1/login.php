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
    
            $email=$_POST['email'];
            $password=$_POST['pass'];
            
                $sql="select * FROM user WHERE email='".$email."'AND PASSWORD='".$password."' ";
                    $result=mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($result);
                  
                    if( mysqli_num_rows($result)==1){
                        $name = $row["NAME"];
                        echo "hello $name";
                        exit();
                    }
                    else{
                        echo "you have entered wrong pass or email";
                        exit();
                    }
        
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="home">
    <div class="login">
        <div class="title">
            <h2>Login</h2>
        </div>
        <br>
        <br>
    <form action="" id="loginform" method="post" >
        
        <label for="email" style="margin-right: 21px;">Email </label>
        <input  placeholder="Enter your email" type="email" name="email" id="email">
        <br>
        <br>
        <label for="pass" >password</label>
        <input placeholder="Enter your password " type="password" name="pass" id="pass">

        <br>
        <button type="submit" name="submit"  onclick=" return  validatelogin() " >login</button>
    </form>
    </div>
    <script src="js/validate.js"></script>
</body>
</html>
