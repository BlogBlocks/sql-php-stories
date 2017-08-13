<?php include('admin-header.php'); ?>
<body><br /><br /><center><h3 style="margin-left:12%;">Enter ID to Edit HERE</h3>
<form action="" method="post"> 
    <input type="text" name="inputText"/>
    <input type="submit" name="SubmitButton" style="background-color:yellow;min-height:30px;"/>
</form></center><br />
<?php
$servername = "localhost";
$username = "root";
$password = "ThinkPadT$#";
$dbname = "javascript";
$dbhandle = mysqli_connect($servername, $username, $password, $dbname); 
//execute the SQL query and return records
if(isset($_POST['SubmitButton'])){ //check if form was submitted
$data = $_POST['inputText']; //get input text
$result = mysqli_query($dbhandle, "SELECT * FROM dudes_001 WHERE id=$data LIMIT 1");
}
?>
<?php
while ($row = mysqli_fetch_array($result)) {
echo "<hr>\n id-
".$row['id']."&nbsp;&nbsp;&nbsp;&nbsp;Chapter Number :
".$row['chapnum']."<br /><center>Chapter: &nbsp;&nbsp;
".$row['chapter']."</center><br>
".$row['entry']."<br />Keywords:&nbsp;&nbsp;
".$row['keywords']."<br><br>"
?>

<textarea cols="70" rows="15" name="origentry"><?php echo $row['entry']; ?></textarea><br /><br />
Keywords:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<?php ;} ?>