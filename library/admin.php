<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="admin.css" />
</head>
<body>
  <h1>Admin Panel</h1>
  <h2>Product List</h2>

  <?php
  $products = json_decode(file_get_contents("products.json"), true);
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th></tr>";
  foreach ($products as $p) {
    echo "<tr>
            <td>{$p['id']}</td>
            <td>{$p['name']}</td>
            <td>{$p['description']}</td>
            <td>\${$p['price']}</td>
          </tr>";
  }
  echo "</table>";
  ?>
</body>
</html>