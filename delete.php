<?php

  // Our database connection
  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");

  // Step 1: Replace null with the correct SQL to delete the selected row
$sql = mysqli_query($conn, "DELETE FROM products WHERE id = {$_POST ['id']}");

  // Step 2: Query the database with our SQL
  $res = mysqli_query($conn, $sql);

  // Regardless of the outcome we'll store the message in a session variable and redirect
  session_start();

  if ($res) {
    $_SESSION["notification"]["success"] = "The product was deleted successfully.";
  } else {
    $_SESSION["notification"]["error"] = "There was an error deleting the product: " . mysqli_error($conn);
  }
  
  // If you're having trouble tracing your error, start by commenting out the redirects
  header("Location: notification.php");
  exit;

?>