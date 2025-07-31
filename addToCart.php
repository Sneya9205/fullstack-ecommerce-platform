<<<<<<< HEAD
<?php
session_start();
?>

<?php
 /* 
if(isset($_POST['prodId']))
{
  $prod_id=$_POST['prodId'];
    if(!isset($_SESSION['cart']))
    $_SESSION['cart']=[];
    if(!isset($_SESSION['cart'][$prod_id]))
    $_SESSION['cart'][$prod_id]=1;
    else
    $_SESSION['cart'][$prod_id]++;

   echo '<script>
            window.location.href="ecommerce_home.php";
        </script>';
    exit;*/
/*creates key value pairs
$_SESSION['cart'] = [
  3 => 2,
  5 => 1
];
}
*/

#store in cart db  instead of session
  $sql=mysqli_connect("localhost","root","","ecommerce");
  if(isset($_POST['prodId']))
  {
    $id=$_POST['prodId'];
    $user_id=$_SESSION['userid'];
    #check if user has a cart
    $cart_query = "SELECT cart_id FROM cart WHERE user_id = $user_id";
    $cart_result = mysqli_query($sql, $cart_query);
    if(mysqli_num_rows($cart_result)>0)
    {
       $row=mysqli_fetch_assoc($cart_result);
       $cart_id=$row['cart_id'];
        $_SESSION['cart']=$cart_id;
    }
    else{
      $query="INSERT INTO cart (user_id) VALUES ($user_id)";
      $result=mysqli_query($sql,$query);   
    }
    $querycheck="SELECT quantity   FROM cart_items WHERE p_id=$id AND cart_id=$cart_id";
    $check_result = mysqli_query($sql, $querycheck);
    if(mysqli_num_rows($check_result)>0)
    {
      $query="UPDATE cart_items set quantity=quantity+1 where p_id=$id AND cart_id=$cart_id";
    }
    else{
      $query="INSERT INTO cart_items(cart_id,p_id,quantity) VALUES ($cart_id,$id,1)";
    }
    $result=mysqli_query($sql,$query );
  }
   echo '<script>window.location.href = "ecommerce_home.php";</script>';
  exit;
?>

=======
<?php
session_start();
?>

<?php
 /* 
if(isset($_POST['prodId']))
{
  $prod_id=$_POST['prodId'];
    if(!isset($_SESSION['cart']))
    $_SESSION['cart']=[];
    if(!isset($_SESSION['cart'][$prod_id]))
    $_SESSION['cart'][$prod_id]=1;
    else
    $_SESSION['cart'][$prod_id]++;

   echo '<script>
            window.location.href="ecommerce_home.php";
        </script>';
    exit;*/
/*creates key value pairs
$_SESSION['cart'] = [
  3 => 2,
  5 => 1
];
}
*/

#store in cart db  instead of session
  $sql=mysqli_connect("localhost","root","","ecommerce");
  if(isset($_POST['prodId']))
  {
    $id=$_POST['prodId'];
    $user_id=$_SESSION['userid'];
    #check if user has a cart
    $cart_query = "SELECT cart_id FROM cart WHERE user_id = $user_id";
    $cart_result = mysqli_query($sql, $cart_query);
    if(mysqli_num_rows($cart_result)>0)
    {
       $row=mysqli_fetch_assoc($cart_result);
       $cart_id=$row['cart_id'];
        $_SESSION['cart']=$cart_id;
    }
    else{
      $query="INSERT INTO cart (user_id) VALUES ($user_id)";
      $result=mysqli_query($sql,$query);   
    }
    $querycheck="SELECT quantity   FROM cart_items WHERE p_id=$id AND cart_id=$cart_id";
    $check_result = mysqli_query($sql, $querycheck);
    if(mysqli_num_rows($check_result)>0)
    {
      $query="UPDATE cart_items set quantity=quantity+1 where p_id=$id AND cart_id=$cart_id";
    }
    else{
      $query="INSERT INTO cart_items(cart_id,p_id,quantity) VALUES ($cart_id,$id,1)";
    }
    $result=mysqli_query($sql,$query );
  }
   echo '<script>window.location.href = "ecommerce_home.php";</script>';
  exit;
?>

>>>>>>> e8e47e1 (Razorpay folder)
