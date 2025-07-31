<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Status</title>
</head>
<body>
    <h1 style="color:green">Your order is sent for delivery!</h1>
    <p id="text1" style="font-size:20px"></p>

    <script>
        const d = new Date();  
        d.setDate(d.getDate()+7);
        const arrivalTime = d.toLocaleString();  // Formats nice
        document.getElementById("text1").innerHTML = "Earliest Time of Arrival: " + arrivalTime;
    </script>
 <?php  
    $order_id=$_SESSION['orderid'];
    $userid=$_SESSION['userid'];
    $sql=mysqli_connect("localhost","root","","ecommerce");
    $query="select o.order_date,u.name,o.order_status from orders as o inner join users as u on o.user_id=u.user_id where o.order_id=$order_id and u.user_id=$userid";
    $result=mysqli_query($sql,$query);
    $row=mysqli_fetch_assoc($result);
    echo "Order placed on ". $row['order_date'] ." by ". $row['name'] ."<br>";
    echo "Status:" . $row['order_status'];
    ?>
</body>
</html>
=======
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Status</title>
</head>
<body>
    <h1 style="color:green">Your order is sent for delivery!</h1>
    <p id="text1" style="font-size:20px"></p>

    <script>
        const d = new Date();  
        d.setDate(d.getDate()+7);
        const arrivalTime = d.toLocaleString();  // Formats nice
        document.getElementById("text1").innerHTML = "Earliest Time of Arrival: " + arrivalTime;
    </script>
 <?php  
    $order_id=$_SESSION['orderid'];
    $userid=$_SESSION['userid'];
    $sql=mysqli_connect("localhost","root","","ecommerce");
    $query="select o.order_date,u.name,o.order_status from orders as o inner join users as u on o.user_id=u.user_id where o.order_id=$order_id and u.user_id=$userid";
    $result=mysqli_query($sql,$query);
    $row=mysqli_fetch_assoc($result);
    echo "Order placed on ". $row['order_date'] ." by ". $row['name'] ."<br>";
    echo "Status:" . $row['order_status'];
    ?>
</body>
</html>
>>>>>>> e8e47e1 (Razorpay folder)
