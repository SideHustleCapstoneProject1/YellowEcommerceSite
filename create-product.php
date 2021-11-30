<?php 

		require('include/connect.php');

$product_name = "";
$price = "";


  if (isset($_POST['create-product'])) {

  $product_name = $_POST['product_name'];
$price = $_POST['price'];
 $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "products/".$filename;

mysqli_query($yellow, "INSERT INTO products(product_name, product_price, filename)

		VALUES ('$product_name', '$price', '$filename')");


        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
        header('location: success.php');





  }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>products</title>
</head>
<body>


<form action="create-product.php" method="POST">
	<input type="text" name="product_name" required placeholder="Product Name" required><br><br>
	<input type="text" required name="price" placeholder="Price" required><br><br>
	<input type="file" name="uploadfile" multiple accept="image/.png, .jpg, .png" data-rule="required" data-msg="Please enter select image" required/><br><br>

	<button name="create-product">Add Product</button>
</form>






</body>
</html>