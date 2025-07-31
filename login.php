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
                button{
                    padding:10px;
                    border-radius:8px;
                    background-color:green;
                    color:white;
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

            </style>
        </head>
        <body>
            <div class="container">
            <h1>LOGIN</h1>
            <form id ="login" method="post" action="">
                Email:
                <input type="text" id="uname" name="uname" required><br>
                Password:
                <input type="password" id="pwd" name="pwd" required><br>
                <div style="display: flex; gap: 20px; align-items: center;">
                    <button type="submit" id="login_bt" name="login_bt">LOGIN</button>
                    <a href="signup.php" style="margin-left: auto;">Sign up?</a>
                </div>
            </form>
            <?php                                       
                $logged=false;
                $sql=mysqli_connect("localhost","root","","ecommerce");
                if(!$sql)
                echo 'Connection Failed';
                if(isset($_POST['login_bt']))
                {
                    $email=$_POST['uname'];
                    $pwd=$_POST['pwd'];
                    $query="SELECT * from users where email='$email'" ;
                    $result=mysqli_query($sql,$query);
                    if($result && mysqli_num_rows($result) > 0)
                    {
                        $row=mysqli_fetch_assoc($result);
                        if(password_verify($pwd,$row['password']))
                        {
                            echo "<script> alert('Login Successful!')</script>";
                            $logged=true;
                        }
                        $_SESSION["userid"]=$row["user_id"];
                        $_SESSION["username"]=$row["name"];

                    }
                    else
                    echo "<script> alert('Login Failed!')</script>";
                    if($logged)
                     echo '<script>
                    window.location.href="ecommerce_home.php";
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
                button{
                    padding:10px;
                    border-radius:8px;
                    background-color:green;
                    color:white;
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

            </style>
        </head>
        <body>
            <div class="container">
            <h1>LOGIN</h1>
            <form id ="login" method="post" action="">
                Email:
                <input type="text" id="uname" name="uname" required><br>
                Password:
                <input type="password" id="pwd" name="pwd" required><br>
                <div style="display: flex; gap: 20px; align-items: center;">
                    <button type="submit" id="login_bt" name="login_bt">LOGIN</button>
                    <a href="signup.php" style="margin-left: auto;">Sign up?</a>
                </div>
            </form>
            <?php                                       
                $logged=false;
                $sql=mysqli_connect("localhost","root","","ecommerce");
                if(!$sql)
                echo 'Connection Failed';
                if(isset($_POST['login_bt']))
                {
                    $email=$_POST['uname'];
                    $pwd=$_POST['pwd'];
                    $query="SELECT * from users where email='$email'" ;
                    $result=mysqli_query($sql,$query);
                    if($result && mysqli_num_rows($result) > 0)
                    {
                        $row=mysqli_fetch_assoc($result);
                        if(password_verify($pwd,$row['password']))
                        {
                            echo "<script> alert('Login Successful!')</script>";
                            $logged=true;
                        }
                        $_SESSION["userid"]=$row["user_id"];
                        $_SESSION["username"]=$row["name"];

                    }
                    else
                    echo "<script> alert('Login Failed!')</script>";
                    if($logged)
                     echo '<script>
                    window.location.href="ecommerce_home.php";
                     </script>';
                }
            ?>
            </div>
        </body>
>>>>>>> e8e47e1 (Razorpay folder)
    </html>