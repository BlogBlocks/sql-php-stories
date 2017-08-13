<?php
if(isset($_POST['delete']))
{
$servername = "localhost";
$username = "root";
$password = "ThinkPadT$#";
$dbname = "javascript";
$id = $_POST['id'];
$con = mysqli_connect($hostname, $username, $password);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
//$id = $_POST['id'];
$sql = "DELETE FROM dudes_001 WHERE ID='$id' LIMIT 1";

mysqli_select_db($con, $dbname )or die("cannot select DB");
$retval = mysqli_query( $con, $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysqli_close($con);
}
?>
