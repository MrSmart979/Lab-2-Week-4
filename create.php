<!DOCTYPE html>
  <head>
    <title>The Form</title>
  </head>

  <body>
    <h1>Create Product</h1>
    <hr>

    <form action="./insert.php" method="post">
      <div>
        <label>Product Name:</label><br>
        <input type="text" name="name">
      </div>

      <div>
        <label>Product Price:</label><br>
        <input type="text" name="price">
      </div>
      
      <button type="submit">Create</button>
    </form>

    <p>
      <a href="index.php">Back to products...</a>
    </p>
  </body>
</html>