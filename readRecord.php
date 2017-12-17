<!DOCTYPE HTML>
<html>
<head>
    <title>Read Records - PHP CRUD </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />    
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Read Products</h1>
        </div>
<?php 
require_once 'productsLogin.php';

$con= mysqli_connect($hn, $un, $pw, $db) or die('Cannot connect to database') ;

$query= "SELECT * FROM products order by ID ASC";
$result = mysqli_query($con, $query) or die ('cannot query database');
$num = mysqli_num_rows($result);

echo "<a href='inputRecord.php' class='btn btn-primary m-b-1em'>Create New Product</a>";

if ($num>0){
 echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Description</th>";
            echo "<th>Price</th>";
            echo "<th>Action</th>";
        echo "</tr>";
while ( $row = mysqli_fetch_array($result)) {
echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td>&#36;".$row['price']."</td>";
    echo "<td>";

    echo "<a href='read_oneRecord.php?id=".$row['id']."' class='btn btn-info m-r-1em'>Read</a>";

    echo "<a href='updateRecord.php?id=".$row['id']."' class='btn btn-primary m-r-1em'>Edit</a>";

    echo "<a href='deleteRecord.php?id=".$row['id']."'  class='btn btn-danger'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}    
    echo "</table>";
}else {
     echo "<div class='alert alert-danger'>No records found.</div>";
}
mysqli_close($con);
?>   
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
