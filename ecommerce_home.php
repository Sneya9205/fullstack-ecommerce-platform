<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>BuyCart</title>
    <link rel="stylesheet" href="ecommerce_styles.css?v=123">
    <script>
        
    </script>
</head>
<body>
    <div class="container">
        <div class="header" style="grid-area: header;">
            <center><h1>BUYCART</h1></center>
            <div><a href="cart.php">View Cart</a></div>
        </div>
        <div class="menu" style="grid-area:sidebar;">
            <span>Categories</span>
            <form id="addToCartForm" method="get" action="">
              <input type="checkbox" name="All" value="all" onchange=this.form.submit() > All<br>
              <input type="checkbox" name="category[]" value="1" onchange=this.form.submit()> Electronics<br>
              <input type="checkbox" name="category[]" value="2" onchange=this.form.submit()> Clothing<br>
              <input type="checkbox" name="category[]" value="3" onchange=this.form.submit()> Home Appliances<br>
              <input type="checkbox" name="category[]" value="4" onchange=this.form.submit()> Books<br>
              <input type="checkbox" name="category[]" value="5" onchange=this.form.submit()> Toys<br>
            </form>
        </div>
        <div class="items" style="grid-area: itemArea;">
            <?php
            $sql = mysqli_connect("localhost", "root", "", "ecommerce");
            /*
            if ($sql) {
                echo "<script>alert('Connection established');</script>";
            } else {
                echo "<script>alert('Connection failed');</script>";
            }*/
            function executeQuery($query,$sql)
            {	
              $result = mysqli_query($sql,$query);
              if (!$result) {
                    die("Query failed: " . mysqli_error($sql));
                  }
                while($row=mysqli_fetch_assoc($result))
                    {
                      echo'<div class="item-card" >';
                echo '<img src="' . $row['url'] . '" alt="product">';
                printf("<p>%s<br>Price: %s </p>", $row['pname'], $row['price']);
                echo '<form id="cartForm" action="addToCart.php" method="post">';
                echo '<input type="hidden" value="'.$row['prod_id'].'" name="prodId">';
                
                echo'<button type="submit" name="cartAdd" style="background-color: #FCA311 ;color:black;
  padding:8px;
  border-radius: 8px;">ADD TO CART</button>';
                echo '</form>';
                echo'</div>';
                    }
            }
            if(isset($_GET["All"]))
            $query = "select * from products";
            if (isset($_GET["category"])) {
                $categories = $_GET["category"];
                $str=implode(",",$categories);
                $query="SELECT * FROM products WHERE category_id IN ($str)";
            }
            else
            { $query = "select * from products";}
            executeQuery($query,$sql);

            ?>
            
        </div>
        <div class="footer" style="grid-area: footer;">
            &copy; 2025 BuyCart. All rights reserved.
        </div>
    </div>
</body>
=======
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>BuyCart</title>
    <link rel="stylesheet" href="ecommerce_styles.css?v=123">
    <script>
        
    </script>
</head>
<body>
    <div class="container">
        <div class="header" style="grid-area: header;">
            <center><h1>BUYCART</h1></center>
            <div><a href="cart.php">View Cart</a></div>
        </div>
        <div class="menu" style="grid-area:sidebar;">
            <span>Categories</span>
            <form id="addToCartForm" method="get" action="">
              <input type="checkbox" name="All" value="all" onchange=this.form.submit() > All<br>
              <input type="checkbox" name="category[]" value="1" onchange=this.form.submit()> Electronics<br>
              <input type="checkbox" name="category[]" value="2" onchange=this.form.submit()> Clothing<br>
              <input type="checkbox" name="category[]" value="3" onchange=this.form.submit()> Home Appliances<br>
              <input type="checkbox" name="category[]" value="4" onchange=this.form.submit()> Books<br>
              <input type="checkbox" name="category[]" value="5" onchange=this.form.submit()> Toys<br>
            </form>
        </div>
        <div class="items" style="grid-area: itemArea;">
            <?php
            $sql = mysqli_connect("localhost", "root", "", "ecommerce");
            /*
            if ($sql) {
                echo "<script>alert('Connection established');</script>";
            } else {
                echo "<script>alert('Connection failed');</script>";
            }*/
            function executeQuery($query,$sql)
            {	
              $result = mysqli_query($sql,$query);
              if (!$result) {
                    die("Query failed: " . mysqli_error($sql));
                  }
                while($row=mysqli_fetch_assoc($result))
                    {
                      echo'<div class="item-card" >';
                echo '<img src="' . $row['url'] . '" alt="product">';
                printf("<p>%s<br>Price: %s </p>", $row['pname'], $row['price']);
                echo '<form id="cartForm" action="addToCart.php" method="post">';
                echo '<input type="hidden" value="'.$row['prod_id'].'" name="prodId">';
                
                echo'<button type="submit" name="cartAdd" style="background-color: #FCA311 ;color:black;
  padding:8px;
  border-radius: 8px;">ADD TO CART</button>';
                echo '</form>';
                echo'</div>';
                    }
            }
            if(isset($_GET["All"]))
            $query = "select * from products";
            if (isset($_GET["category"])) {
                $categories = $_GET["category"];
                $str=implode(",",$categories);
                $query="SELECT * FROM products WHERE category_id IN ($str)";
            }
            else
            { $query = "select * from products";}
            executeQuery($query,$sql);

            ?>
            
        </div>
        <div class="footer" style="grid-area: footer;">
            &copy; 2025 BuyCart. All rights reserved.
        </div>
    </div>
</body>
>>>>>>> e8e47e1 (Razorpay folder)
</html>