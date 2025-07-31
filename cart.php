<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Cart</title>
</head>
<body>
    <?php
        $sql=mysqli_connect("localhost","root","","ecommerce");
         $total=0;
        $userid=$_SESSION['userid'];
        $query="SELECT cart_id from cart where user_id=$userid";
        $result=mysqli_query($sql,$query);
        $row=mysqli_fetch_assoc($result);
        $cart_id=$row['cart_id'];
        $items=0;
        if(mysqli_num_rows($result)>0)
        {
             echo 'CART ITEMS<br>';
             $query="SELECT p.pname,p.price,c.quantity FROM products as p inner join cart_items as c on c.p_id=p.prod_id where cart_id=$cart_id";
             $result=mysqli_query($sql,$query);
             while($row=mysqli_fetch_assoc($result))
            {
                $price=$row['price']*$row['quantity'];
                $total+=$price;
                $items+=$row['quantity'];
                echo 'Product Name:'. $row['pname'];
                echo '<div style="text-align:right;">Qty='. $row['quantity'] . '&nbsp; Price='. $price. '</div>';
                echo '<br>';
            }   
        }
        else{
             echo 'Cart is empty!';
            exit;
        }
       /* if(!isset($_SESSION['cart']) || empty($_SESSION['cart']))
        {
            echo 'Cart is empty!';
            exit;
        }
        echo 'CART ITEMS<br>';
       
        foreach($_SESSION['cart'] as $product_id => $quantity)  
        {//product_key->key , quantity->value
            $query="SELECT * from products where prod_id= $product_id";
            $result=mysqli_query($sql,$query);
            while($row=mysqli_fetch_assoc($result))
            {
                $price=$row['price']*$quantity;
                $total+=$price;
                echo 'Product Name:'. $row['pname'];
                echo '<div style="text-align:right;">Qty='. $quantity . '&nbsp; Price='. $price . '</div>';
                echo '<br>';
            }   
        }*/
        echo '<p style="text-align:right; color:red">' . $total . '</p><br>';
        echo '<form>';
        echo '<button type="submit" id="paybtn" name="payBtn">Proceed to pay</button>';
        echo '</form>';
        if(isset($_GET['payBtn']))
        {
            $userid=$_SESSION['userid'];
            $stats='pending';
            $date=date("Y-m-d");
            $time=date("h:i:sa");
            $order_date=$date;
            $query="INSERT INTO orders (order_status,order_date,qty,user_id) VALUES ('$stats','$order_date',$items,$userid);";
            $result=mysqli_query($sql,$query);
            
            $order_id=mysqli_insert_id($sql); // returns last inserted id from auto inc
            $_SESSION['orderid']=$order_id;
            $query="INSERT INTO payment (pay_status,amount,user_id,order_id)values('$stats',$total,$userid,$order_id)";
            $result=mysqli_query($sql,$query);
            echo "<script>
            window.location.href='http://localhost/DBMS-ecommerce/razorpay-php-sample-project/razorpay-sample-project/index.php?amount=$total';
            </script>";
        }
    ?>
</body>
=======
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Cart</title>
</head>
<body>
    <?php
        $sql=mysqli_connect("localhost","root","","ecommerce");
         $total=0;
        $userid=$_SESSION['userid'];
        $query="SELECT cart_id from cart where user_id=$userid";
        $result=mysqli_query($sql,$query);
        $row=mysqli_fetch_assoc($result);
        $cart_id=$row['cart_id'];
        $items=0;
        if(mysqli_num_rows($result)>0)
        {
             echo 'CART ITEMS<br>';
             $query="SELECT p.pname,p.price,c.quantity FROM products as p inner join cart_items as c on c.p_id=p.prod_id where cart_id=$cart_id";
             $result=mysqli_query($sql,$query);
             while($row=mysqli_fetch_assoc($result))
            {
                $price=$row['price']*$row['quantity'];
                $total+=$price;
                $items+=$row['quantity'];
                echo 'Product Name:'. $row['pname'];
                echo '<div style="text-align:right;">Qty='. $row['quantity'] . '&nbsp; Price='. $price. '</div>';
                echo '<br>';
            }   
        }
        else{
             echo 'Cart is empty!';
            exit;
        }
       /* if(!isset($_SESSION['cart']) || empty($_SESSION['cart']))
        {
            echo 'Cart is empty!';
            exit;
        }
        echo 'CART ITEMS<br>';
       
        foreach($_SESSION['cart'] as $product_id => $quantity)  
        {//product_key->key , quantity->value
            $query="SELECT * from products where prod_id= $product_id";
            $result=mysqli_query($sql,$query);
            while($row=mysqli_fetch_assoc($result))
            {
                $price=$row['price']*$quantity;
                $total+=$price;
                echo 'Product Name:'. $row['pname'];
                echo '<div style="text-align:right;">Qty='. $quantity . '&nbsp; Price='. $price . '</div>';
                echo '<br>';
            }   
        }*/
        echo '<p style="text-align:right; color:red">' . $total . '</p><br>';
        echo '<form>';
        echo '<button type="submit" id="paybtn" name="payBtn">Proceed to pay</button>';
        echo '</form>';
        if(isset($_GET['payBtn']))
        {
            $userid=$_SESSION['userid'];
            $stats='pending';
            $date=date("Y-m-d");
            $time=date("h:i:sa");
            $order_date=$date;
            $query="INSERT INTO orders (order_status,order_date,qty,user_id) VALUES ('$stats','$order_date',$items,$userid);";
            $result=mysqli_query($sql,$query);
            
            $order_id=mysqli_insert_id($sql); // returns last inserted id from auto inc
            $_SESSION['orderid']=$order_id;
            $query="INSERT INTO payment (pay_status,amount,user_id,order_id)values('$stats',$total,$userid,$order_id)";
            $result=mysqli_query($sql,$query);
            echo "<script>
            window.location.href='http://localhost/DBMS-ecommerce/razorpay-php-sample-project/razorpay-sample-project/index.php?amount=$total';
            </script>";
        }
    ?>
</body>
>>>>>>> e8e47e1 (Razorpay folder)
</html>