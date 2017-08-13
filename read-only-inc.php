<?php
$servername = "localhost";
$username = "root";
$password = "ThinkPadT$#";
$dbname = "javascript";
$dbhandle = mysqli_connect($servername, $username, $password, $dbname); 
//execute the SQL query and return records
$result = mysqli_query($dbhandle, "SELECT * FROM dudes_001 ORDER BY id DESC LIMIT 15 ");
?>


<?php

while ($row = mysqli_fetch_array($result)) {
echo "<hr>\n id-
".$row['id']."&nbsp;&nbsp;&nbsp;&nbsp;Chapter Number :
".$row['chapnum']."<br /><center>Chapter: &nbsp;&nbsp;
".$row['chapter']."</center><br>
".$row['entry']."<br />Keywords:&nbsp;&nbsp;
".$row['keywords']."<br><br>"; }
?>

