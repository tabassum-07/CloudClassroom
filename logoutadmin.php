<?php
session_start();
?>

<?php
$_SESSION["umail"] = "";  // Set the value to an empty string if you want to clear it
unset($_SESSION['umail']);  // Use unset without arguments to clear the session variable
header('Location: index.php');  // You might want to include ".php" in the file path
exit();
?>