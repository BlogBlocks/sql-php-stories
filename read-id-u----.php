<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>making-custom-form-inputs-with-css</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta  name="author" content="Jack Northrup" />
<title>Jack Northrup</title>
<link rel="stylesheet" href="story.css" />

<script type="text/javascript" src="-tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="-tinymce/tinymce.config.js"></script>
<script type="text/javascript" src="-tinymce/filemanager.js"></script>
<script type="text/javascript">
tinyMCE.init({ 
    selector: "textarea"
    mode: "textareas",      
    plugins: "media",
    theme: "advanced", 
    theme_advanced_buttons1: "code", 
    media_strict: false 
}); 
</script>


</head>
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

<div id="wrapper">
<div id="post">
<form action="story-update.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />ENTER NOTHING HERE<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verify ID Only:<br/>
<input type="text" name="id" value="<?php echo $result['id']; ?>"/><br /><br /><hr><br />
Article Number:&nbsp;
<input type="text" name="origchapnum" value="<?php echo $result['chapnum']; ?>"/><br /><br />
Article Title:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="origchapter" value="<?php echo $result['chapter']; ?>"/><br /><br />
Content:&nbsp;&nbsp;&nbsp;&nbsp;


<textarea cols="70" rows="15" name="origentry"><?php echo $result['entry']; ?></textarea><br /><br />
Keywords:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input  type="text" name="origkeywords" value="<?php echo $result['keywords']; ?>" style="min-height:50px;"/><br /><br />
    <input type= "submit" name= "submit" value="Enter"/>
</div>
</div>
</form>
</body>
</html
