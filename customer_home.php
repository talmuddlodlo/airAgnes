<?php
session_start();
$pageTitle = $_SESSION['name'];
include("inc/header.php");
?>
<p id="para"> <?php echo  $_SESSION['name']. " ". $_SESSION['sname']. " we welcome you to flyAgnes "; ?> </p>
<p id="para"><a href="logout.php">Log out</a></p>
<?php
include("book.php");
include("inc/footer.php");
?>
