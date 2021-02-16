<?php

  // Our database connection
  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");

  // Step 1: Write the SQL to update the row (replace null with the string)
  $sql = "UPDATE products SET 
    product name = '{$_POST['product name']}',
    product price = '{$_POST ['product price']}',
  WHERE id = {$_POST['id']} ";
  // Step 2: Query the database with our SQL
  $res = mysqli_query($conn, $sql);




  // Regardless of the outcome we'll store the message in a session variable and redirect
  session_start();
    
  if ($res) {
    $_SESSION["notification"]["success"] = "The product was updated successfully.";
  } else {
    $_SESSION["notification"]["error"] = "There was an error updating the product: " . mysqli_error($conn);
  }
  
  // If you're having trouble tracing your error, start by commenting out the redirects
  header("Location: notification.php");
  exit;

?>