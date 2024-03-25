<?php
include 'config/db.php';

// SQL query
$sql = "SELECT name, price FROM items";
$result = mysqli_query($conn, $sql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($conn);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <div class="t-container">
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th colspan="2">Product Name</th>
                    <th colspan="1">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td colspan="3"><?php echo $product['name']; ?></td>
                        <td colspan="1"><?php echo "$" . $product['price']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

</body>

</html>