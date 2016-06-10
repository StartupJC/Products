<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Edit Product <?= $product['id'] ?></h2>
	<form action="/products/update/<?= $product['id'] ?>" method="post">
		<label>Name</label>
		<input type="text" value="<?= $product['name'] ?>" name="name"><br>
		<label>Description</label>
		<input type="text" value="<?= $product['description'] ?>" name="description"><br>
		<label>Price</label>
		<input type="text" value="<?= $product['price'] ?>" name="price"><br>
		<input type="submit" value="Update">
	</form>
	<a href="/products/show/<?= $product['id'] ?>">Back</a>
</body>
</html>