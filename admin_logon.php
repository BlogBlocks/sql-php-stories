<?php include("/home4/epistler/public_html/tutorials/password_protect.php"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta  name="author" content="Jack Northrup" />
<title>Computer Dudes Corner</title>
<link rel="stylesheet" href="story.css" />
</head>
<body>
<div id="wrapper">
<?php include('admin-header.php'); ?>

<div id="center-column">
<div id="post"><br />
<center>
   <br />
 
<form action="document-insert.php" method="post">

Chapter Number:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="origchapnum" value="" width="50px"/><br /><br />
Chapter Name:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="origchapter" value=""/><br />
Keywords:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="origkeywords" value=""/><br />
Content:<textarea cols="70" rows="10" name="origentry" value="text"></textarea><br /><br />
<input type= "submit" name= "submit" value="Enter"/>

</form> <br />
<label>
<a class="notice" href="read-id-u.php" target="_blank">Notebook EDITOR - Edit and Repost</a>
</label>
<br /><br /><a href="file-edit.php">GEH</a><br />
<br /><br /><h2>"CLICKABLE" List of html Generated Pages</h2><br />
<?php
settype($thelist, "string"); 
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'html')
        {
            $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
        }
    }
echo $thelist;
    closedir($handle);
}
?></center><hr />				
<center>
<h2>View and Delete Files</h2>
<h4>Select file to view then view or delete</h4>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="file" name="filename" value="" />
<input type="submit" name="submit" value="VIEW" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="delete" value="DELETE" style="color:red;" />
<br /><?php
if (isset ( $_POST ['submit'] ) ) {
$view = file_get_contents ($_POST ['filename']  );
echo $view;
  } ;
?>

<?php

if (isset ( $_POST ['delete'] ) && ! empty ($_POST ['filename'] )) {
$filename = $_POST ['filename'];
unlink($filename);
$filename = NULL; 
}
?>
</center>
</form><a href="get.php">Capture a URL to turn Convert to HTML</a>
<a href="open-file.php">.</a>
<form method="post" action="delete.php">
To Delete Notebook Entry - Enter edit id-<input name="id" type="text" id="id" />
<input name="delete" type="submit" id="delete" value="ENTER TO DELETE" />
</form>
 <form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="uploadedfile" type="file" />&nbsp;&nbsp;&nbsp;
<input type="submit" value="Upload File" />
</form>
 <br />
</div>
<div id="read">
<?php include('local-connect.php'); ?>
<div class="boxit">
<?php include('read-only-inc.php'); ?>
</div>
</div>
</div>
