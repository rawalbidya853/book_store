<?php

include('dbconnection.php');
if(isset($_POST['Submit'])) {

    $user_id = $_POST['user_id'];
    $order_Date = $_POST['order_Date'];
    $total_amount = $_POST['total_amount'];

 


    $query = mysqli_query($conn, "insert into orders(user_id, order_Date, total_amount,) Values ('$user_id', '$order_Date',$total_amount)");

    if($query){
       echo "<script>alert('data inserted successfully')</script>";
        }else{
        echo "<script>alert('there is an error')</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
</head>
<body>
    <style>
    .products{
        max-width: 968px;
        margin-left: auto;
        margin-right: auto;
    }
    .products-container{
        display:grid;
        grid-template-column: repeate(auto-fit, minmax(180px,auto));
        gap: 1rem;
        margin-top: 2rem;
    }
   .products-container .box{
    padding: 20px;
    box-shadow: 1px 2px 11px 4px rgb(14 53 54 / 15%);
    border-radius: 0.5rem;
    position: relative;
   }
    </style>
    
      </section>
<section class="contact" id="contact">
<a href="viewuser.php">View Users</a>
            <div style="margin:5px auto">
        <form action="orders.php" method="POST">
         <label for="User_id">user_id:</label>
        <input type="text" Name="user_id"/>
            <br /> <br />
            <label for="order_Date">order_Date:</label>
            <input type="text" Name="order_Date">
            <br><br>
             
            <label for="total_amount">total_amount:</label>
            <input type="text" Name="total_amount"><br><br>

            <button type="submit" name="Submit">Submit</button>
            
        </form>
    </div>
          <!-- </section>


          <div class="products-container">
          <div class="box">
            <img src="images/apple.jpg" alt="">
            <span>fresh items</span>
            <h2>farm fresh organi<br>fruits 250g</h2>
            <h3 class="price">$7.99<span>kg</span></h3>
            <i class='bx bx-heart' ></i>
            <span class="discount">-25%</span>
</div>

<div class="box">
            <img src="images/pear.jpg" alt="">
            <span>fresh items</span>
            <h2>farm fresh organi<br>fruits 250g</h2>
            <h3 class="price">$7.99<span>kg</span></h3>
            <i class='bx bx-heart' ></i>
            <span class="discount">-25%</span>
</div>

<div class="box">
            <img src="images/mango.jpg" alt="">
            <span>fresh items</span>
            <h2>farm fresh organi<br>fruits 250g</h2>
            <h3 class="price">$7.99<span>kg</span></h3>
            <i class='bx bx-heart' ></i>
            <span class="discount">-25%</span>
</div>
</div> -->
</body>
</html>