<!DOCTYPE HTML>
<html>
<head>
    <title>Read One Record - PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="container">  
    <div class="page-header">
            <h1>Read Product</h1>
    </div>
         
<?php 
require_once 'productsLogin.php';

$id = $_GET['id'] or die('Record ID not found.');
$con = mysqli_connect($hn, $un, $pw, $db) or die ('Cannot connect to database');
$query= "SELECT * FROM products where id=$id";
$result = mysqli_query($con, $query) or die ('cannot query database');
$num = mysqli_num_rows($result);

while ( $row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
}
mysqli_close($con);
?> 

<table class='table table-hover table-responsive table-bordered'>
    <tr>
        <td>Name</td>
        <td><?php echo htmlspecialchars($name, ENT_QUOTES);  ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><?php echo htmlspecialchars($price, ENT_QUOTES);  ?></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href='readRecord.php' class='btn btn-danger'>Back to read products</a>
        </td>
    </tr>
</table>  
</div> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>