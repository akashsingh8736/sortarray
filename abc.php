<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$first = $_POST['first'];
$second = $_POST ['second'];
$third = $_POST ['three'];
$fourth = $_POST ['fourth'];
$five = $_POST ['five'];

$arr = array("$first","$second","$third","$fourth","$five");
sort($arr);
foreach ($arr as $sort) {
	echo $sort;
	echo "<br>";
}
?>
<p>Back <a href="sort.php">click here</a></p>
</body>
</html>