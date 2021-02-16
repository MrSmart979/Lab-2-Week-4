<?php

  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");
  $result = mysqli_query($conn, "SELECT * FROM products");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
  <head>
    <title>Document</title>

    <style>
      table, tr, td {
        border: 1px solid #ccc;
        padding: 0.25em;
      }
    </style>
  </head>

  <body>
    <h1>Products</h1>
    <hr>

    <p>
      <a href="create.php">Create new product...</a>
    </p>

    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($rows as $row): ?>
          <tr>
          <td><?= $row['name'] ?></td>
          <td><?= $row['price'] ?></td>
          <td>
          <a href='./edit.php?id=<?= $row['id'] ?>'>edit</a>
          |
          <a href='./delete.php?id=<?= $row['id'] ?>'>delete</a>
          </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>