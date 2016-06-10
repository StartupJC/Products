<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Product <?= $product['id'] ?></h2>
	<p>Name: <?= $product['name'] ?></p>
	<p>Description: <?= $product['description'] ?></p>
	<p>Price: $<?= $product['price'] ?></p>

	<a href="/products/edit/<?= $product['id'] ?>">Edit</a>
	<a href="/products">Back</a>
</body>
</html>