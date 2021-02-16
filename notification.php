<?php 
  
  session_start();

  if (!isset($_SESSION["notification"])) {
    header("Location: index.php");
    exit;
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Notification</title>
  </head>

  <body>
    <?php if (isset($_SESSION["notification"]["success"])): ?>
      <h2>SUCCESS:</h2>
      <p style="color: green"><?= $_SESSION["notification"]["success"] ?></p>
    <?php elseif (isset($_SESSION["notification"]["error"])): ?>
      <h2>ERROR:</h2>
      <p style="color: red"><?= $_SESSION["notification"]["error"] ?></p>
    <?php endif ?>

    <p>
      <a href="index.php">Back to products...</a>
    </p>
  </body>
</html>

<?php session_unset() ?>