<!DOCTYPE HTML>
<html>
<head>
    <title>Create a Record - PHP CRUD </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />     
</head>
<body>
    <div class="container">  
        <div class="page-header">
            <h1>Create Product</h1>
        </div>

<?php 
require_once 'productsLogin.php';

if (isset($_POST['submit'])) {
	$name =htmlentities($_POST['name']);
	$description=htmlentities($_POST['description']);
	$price=htmlentities($_POST['price']);

if (!empty($name) && !empty($description)) {

$con = mysqli_connect($hn, $un, $pw, $db) or die ('Cannot connect to database');

$query = "INSERT INTO products (id, name, price, created, description)"."VALUES (0, '$name', '$price', NOW(), '$description')";
mysqli_query($con, $query) or die ('cannot query database');
 echo "<div class='alert alert-success'><p>Thanks for adding your Product!</p>";
echo '<p><strong>Name:</strong>'.$name.'<br>';
echo '<p><strong>Description:</strong>'.$description.'<br>';
echo '<p><strong>Price:</strong>'.$price.'</div><br>';

 mysqli_close($con);
}else {
	echo "<div class='alert alert-danger'>Please enter the full details</div>";
}
} 

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table class="table table-hover table-responsive table-bordered">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" class='form-control'></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><input type="text" name="description" class='form-control'></td>
	</tr>
	<tr>
		<td>Price</td>
		<td><input type="text" name="price" class='form-control'></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Save" class='btn btn-primary'>
		<a href='readRecord.php' class='btn btn-danger'>Back to read products</a>
		</td>
	</tr>
</table>    	
</form>    
    </div>     
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
