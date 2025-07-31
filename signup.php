<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
             <style>
                .container{
                    margin: 250px 500px;
                    padding:50px;
                    border-radius: 8px;
                    background-color: white;
                }
                body{
                    background-color: gainsboro;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size:25px;
                }
                input[type=text],input[type=number],input[type=password]
                {
                    font-size:22px;
                    margin-bottom:2px;
                }
                button{
                    padding:10px;
                    border-radius:8px;
                    background-color:green;
                    color:white;
                }
            </style>
        </head>
        <body>
            <div class="container">
            <h1>SIGN UP</h1>
            <form id ="login" method="post" action="">
                User Name:
                <input type="text" id="uname" name="uname" required><br>
                Password:
                <input type="password" id="pwd" name="pwd" required><br>
                Phone Number:
                <input type="number" id="ph" name="ph" required><br>
                Email:
                <input type="text" id="email" name="email" required><br>
                <button type="submit" id="login_bt" name="login_bt">SIGN UP</button>
                
            </form>
            <?php
                $sql=mysqli_connect("localhost","root","","ecommerce");
                if(!$sql)
                echo 'Connection Failed';
                if(isset($_POST['login_bt']))
                {
                    $name=$_POST['uname'];
                    $pwd=$_POST['pwd'];
                    $password=password_hash($pwd,PASSWORD_DEFAULT);
                    $ph_no=$_POST['ph'];
                    $email=$_POST['email'];
                    $query="Insert into users (name,ph_no,email,password) values ('$name','$ph_no','$email','$password')" ;
                    $result=mysqli_query($sql,$query);
                    if($result)
                    {
                            echo "<script> alert('Signed in!')</script>";
                            $logged=true;
                    }
                    else
                    echo "<script> alert('Signup Failed!')</script>";
                    if($logged)
                     echo '<script>
                    window.location.href="login.php";
                     </script>';
                }
            ?>
            </div>
        </body>
=======
<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
             <style>
                .container{
                    margin: 250px 500px;
                    padding:50px;
                    border-radius: 8px;
                    background-color: white;
                }
                body{
                    background-color: gainsboro;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size:25px;
                }
                input[type=text],input[type=number],input[type=password]
                {
                    font-size:22px;
                    margin-bottom:2px;
                }
                button{
                    padding:10px;
                    border-radius:8px;
                    background-color:green;
                    color:white;
                }
            </style>
        </head>
        <body>
            <div class="container">
            <h1>SIGN UP</h1>
            <form id ="login" method="post" action="">
                User Name:
                <input type="text" id="uname" name="uname" required><br>
                Password:
                <input type="password" id="pwd" name="pwd" required><br>
                Phone Number:
                <input type="number" id="ph" name="ph" required><br>
                Email:
                <input type="text" id="email" name="email" required><br>
                <button type="submit" id="login_bt" name="login_bt">SIGN UP</button>
                
            </form>
            <?php
                $sql=mysqli_connect("localhost","root","","ecommerce");
                if(!$sql)
                echo 'Connection Failed';
                if(isset($_POST['login_bt']))
                {
                    $name=$_POST['uname'];
                    $pwd=$_POST['pwd'];
                    $password=password_hash($pwd,PASSWORD_DEFAULT);
                    $ph_no=$_POST['ph'];
                    $email=$_POST['email'];
                    $query="Insert into users (name,ph_no,email,password) values ('$name','$ph_no','$email','$password')" ;
                    $result=mysqli_query($sql,$query);
                    if($result)
                    {
                            echo "<script> alert('Signed in!')</script>";
                            $logged=true;
                    }
                    else
                    echo "<script> alert('Signup Failed!')</script>";
                    if($logged)
                     echo '<script>
                    window.location.href="login.php";
                     </script>';
                }
            ?>
            </div>
        </body>
>>>>>>> e8e47e1 (Razorpay folder)
    </html>