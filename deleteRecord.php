<!DOCTYPE HTML>
<html>
<head>
    <title>Delete a Record - PHP CRUD </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />     
</head>
<body>
    <div class="container">  
        <div class="page-header">
            <h1>Delete Product</h1>
        </div>

<?php 
require_once 'productsLogin.php';

$id = $_GET['id'] or die('Record ID not found.');

$con = mysqli_connect($hn, $un, $pw, $db) or die ('Cannot connect to database');

$query = "DELETE FROM products WHERE id=$id";
mysqli_query($con, $query) or die ('cannot query database');
echo "<div class='alert alert-success'><p>Delete Successful!</p>";

 mysqli_close($con);

?>
    </div>     
    <a href='readRecord.php' class='btn btn-danger'>Back to read products</a>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
