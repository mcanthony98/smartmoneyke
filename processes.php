<?php 
session_start();
require "includes/connect.php";
include "includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("Y_m_d_H_i_s");
$self_email = "ganiamtech@gmail.com";




if(isset($_POST["contform"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $desc = mysqli_real_escape_string($conn, $_POST["message"]);
   


    $insert = "INSERT INTO lead (name, email, phone, company, message, date_created) VALUES ('$name', '$email', '$phone', '$company', '$desc', '$date')";

    $emsubject = "New Enquiry from the Labsco Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Sender details:</b><br/><br/>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;
    $_SESSION['access_ty'] = "thank you";

    
    maillinge("info@labscoafrica.com", $emsubject, $embody);
    maillinge($self_email, $emsubject, $embody);

    
    if ($conn->query($insert)===TRUE){
          
        header('location: thank-you-conatct.php');
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: contact-us.php");
    }

    
    
    exit();
}
elseif(isset($_POST["post-comment"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $blogid = mysqli_real_escape_string($conn, $_POST["blogid"]);
    $desc = mysqli_real_escape_string($conn, $_POST["comment"]);

    
    $insert = "INSERT INTO review (`name`, `email`, `comment`, `date_reviewed`, `blog_id`) VALUES ('$name', '$email', '$desc', '$date', '$blogid')";

    if ($conn->query($insert)===TRUE){
          
        header("location: post-single.php?id=$blogid#comments");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: post-single.php?id=$blogid");
    }

}
elseif(isset($_POST["checkout"])){
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $company = mysqli_real_escape_string($conn, $_POST["company"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $address = mysqli_real_escape_string($conn, $_POST["add"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $sms = mysqli_real_escape_string($conn, $_POST["sms"]);
    $user = mysqli_real_escape_string($conn, $_POST["checkout"]);
    $ordercode = "ORD".substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

    

    $userins = $conn->query("INSERT INTO users (firstname, lastname, email, phone, date_created) VALUES ('$fname', '$lname', '$email', '$phone', '$date')");
    $user_id = $conn->insert_id;

    $ordins = $conn->query("INSERT INTO orders (order_code, user_id, delivery_address, company, country, city, notes, date_ordered) VALUES ('$ordercode', '$user_id', '$address', '$company', '$country', '$city', '$sms', '$date')");
    $ordid = $conn->insert_id;

    include "includes/cart.php";
    if(isset($_SESSION['uid'])){
        $uid = $_SESSION['uid'];
        $qry = "SELECT * FROM cart JOIN product ON product.product_id=cart.product_id WHERE cart.user_id='$uid' ORDER BY cart.cart_id DESC";
    }elseif(isset($_COOKIE['cart'])){
        $uid = $_COOKIE['cart'];
        $qry = "SELECT * FROM cart JOIN product ON product.product_id=cart.product_id WHERE cart.browser_id='$uid' ORDER BY cart.cart_id DESC";
    }

    $res = $pdo->query($qry);
    while($row = $res->fetch_assoc()){
        $pid = $row['product_id'];
        $qty = $row['cart_quantity'];
        $price = $row['price'];
        $ordprodins = $conn->query("INSERT INTO order_product (order_id, product_id, quantity_ordered, amount_per_item) VALUES ('$ordid', '$pid', '$qty', '$price')");
    }

    header("location: pesapal/SubmitOrderRequest.php?booking_id=$ordid");
    exit();
      
}
?>