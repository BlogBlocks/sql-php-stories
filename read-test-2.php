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
?>
<div id="wrapper">
<div id="post">
<form action="document-insert.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />ENTER NOTHING HERE<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verify ID Only:<br/>
while ($row = mysqli_fetch_array($result)) {
<input type="text" name="id" value="<?php echo $row['id']; ?>"/><br /><br /><hr><br />
Article Number:&nbsp;
<input type="text" name="origchapnum" value="<?php echo $row['chapnum']; ?>"/><br /><br />
Article Title:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="origchapter" value="<?php echo $row['chapter']; ?>"/><br /><br />
Content:&nbsp;&nbsp;&nbsp;&nbsp;


<textarea cols="70" rows="15" name="origentry"><?php echo $row['entry']; ?></textarea><br /><br />
Keywords:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input  type="text" name="origkeywords" value="<?php echo $row['keywords']; ?>" style="min-height:50px;"/><br /><br />
    <input type= "submit" name= "submit" value="Enter"/>
<?php ;} ?>