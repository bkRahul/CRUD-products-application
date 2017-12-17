<!DOCTYPE HTML>
<html>
<head>
    <title>Update Record - PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="container">  
    <div class="page-header">
            <h1>Update Product</h1>
    </div>
         
<?php 
require_once 'productsLogin.php';

$id = $_GET['id'] or die('Record ID not found.');

$con = mysqli_connect($hn, $un, $pw, $db) or die ('Cannot connect to database');


 if (isset($_POST['submit'])){


$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];

$query = "UPDATE products SET name=$name, description=$description, price=$price WHERE id = $id";
$result = mysqli_query($con, $query) or die ('cannot query database');
 }

?> 

<form action="<?php $_SERVER["PHP_SELF"] . "?id={$id}" ?>" method="post">
<table class='table table-hover table-responsive table-bordered'>
    <tr>
        <td>Name</td>
        <td><input type='text' name='name' class='form-control'/></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><input type='text' name='description' class='form-control'/></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type='text' name='price' class='form-control'/></td>
    </tr>
    <tr>                                      
        <td></td>
        <td>
        	<input type='submit' name='submit' value='Save Changes' class='btn btn-primary' />
            <a href='readRecord.php' class='btn btn-danger'>Back to read products</a>
        </td>
    </tr>
</table>  
</div> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>