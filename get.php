<!doctype html>
<!-- comment -->
<head>
<style></style>
<title></title>
<link rel="" href="">
<script></script>
<?php  


// Set the database access information as constants:
DEFINE ('DB_USER', 'lockf0rc');
DEFINE ('DB_PASSWORD', '830178997');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'lockf0rc_Test');


// Make the connection:
$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, $DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
?>


</head>
<body>
<h1>Math city</h1>
<form action="get.php" method="post">
<h3>Addition</h3>
<h4>
<?php echo 
				(isset($_POST['v1'])&&(isset($_POST['v2'])))?($_POST['v1']+$_POST['v2']):'FILL IN THE FORM THEN CLICK SUBMIT '; 
				?>
</h4><hr/>


</h1>
<form action="get.php" method="Post">
<p>value1:<input type="text" name="v1" ></input> </p>
<p>value2:<input type="text" name="v2"></input> </p>
<p><input type="submit" value="submit"></input></p>
</form>
<hr/>
<?php  
$xml=simplexml_load_file("xsimple.xml");
var_dump($xml);
?>
<hr/>
<?php  
echo 'Current PHP version: ' . phpversion().'<br/>';
$sql = "SELECT * FROM `users`"
    . "ORDER BY `object`.`class` ASC LIMIT 0, 30 ";
$result= mysqli_query($dbc,$sql);
var_dump($results);
?>
</body>
</html>