<?php ('includes local-connect.php') ?>
<?php
$chapnum = str_replace("'", "&#39;", $_POST[origchapnum]);
$chapter = str_replace("'", "''", $_POST[origchapter]);
$entry = str_replace("'", "''", $_POST[origentry]);
$keywords = str_replace("'", "''", $_POST[origkeywords]);

$servername = "localhost";
$username = "epistler_dudes";
$password = "ThinkPadT$#";
$dbname = "javascript";

// Create connection
$dbhandle = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbhandle->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO dudes_001 (id, chapnum, chapter, entry,  keywords)
VALUES
('','$chapnum','$chapter','$entry','$keywords')";
if (!mysqli_query($dbhandle, $sql)) {
	die('Error - Failed to post: ' . mysqli_error($con));
}
mysqli_close($dbhandle);
header("Location: index.php");

?>

