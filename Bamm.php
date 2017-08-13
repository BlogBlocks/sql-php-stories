<?php include("/home4/epistler/public_html/tutorials/password_protect.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta  name="author" content="Jack Northrup" />
<title>SALTMAN</title>
<link rel="stylesheet" href="story.css" />
</head>
<body>
<div id="wrapper">
<?php include('admin-header.php'); ?>

<div id="center-column">
<div id="post"><br />
<?php echo $_SERVER['HOME']; ?>
<form action="document-insert.php" method="post">
Comment:<textarea cols="70" rows="10" name="origentry" value="text"></textarea><br /><br />
<input type = "hidden" name = "origchapnum" value = "111" />
<input type = "hidden" name = "origchapter" value = "Comment" />
<input type= "submit" name= "submit" value="Enter"/>
</form> <br />

<br />
</div>
<div id="read">
<?php include('local-connect.php'); ?>

<?php include('read-only-inc.php'); ?>

</div>
<?php mysql_close($dbhandle); ?>
</div>
</div>
