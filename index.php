<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head><title>Computer Dudes Corner</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta content="Jack Northrup " name="author" />
<link rel="stylesheet" href="story.css" />
<link rel="stylesheet" type="css/text" href="story.css" />
</head>
<body>
<div id="wrapper">
<?php include('story-header.php'); ?>
   <div id="center-column">
      <div id="read-text">
         <form style="text-align:center;" action="read-search.php" method="get"><br />
          <input type="text" name="query" />
          <button>Chapter or Search</button>
         </form>
      </div>
<?php include('read-only-inc.php'); ?>
  </div>
</div>

</body>
</html>
