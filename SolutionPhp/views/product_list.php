<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="table-wrap">
    <h2>Product list</h2>

    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
    </tr>

    <?php foreach($products as $product): ?>
    <tr>
        <td><?= $product->id ?></td>
        <td><?= $product->name ?></td>
        <td><?= number_format($product->price) ?></td>
        <td><?= $product->category ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
    </div>
</body>
</html>