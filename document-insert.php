<?php
$chapnum = str_replace("'", "''", $_POST[origchapnum]);
$chapter = str_replace("'", "''", $_POST[origchapter]);
$entry = str_replace("'", "''", $_POST[origentry]);
$keywords = str_replace("'", "''", $_POST[origkeywords]);

$servername = "localhost";
$username = "root";
$password = "ThinkPadT$#";
$dbname = "javascript";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO dudes_001 (chapnum, chapter, entry, keywords)
VALUES ('$chapnum','$chapter','$entry','$keywords')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<p>A script on this page starts this clock:</p>
<p id="demo"></p>
<button onclick="clearInterval(myVar)">Stop time</button>
<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<?php
header("Location: index.php");
die();
?>




