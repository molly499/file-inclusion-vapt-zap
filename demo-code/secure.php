<?php

//WHITELIST OF ALLOWED PAGES
$allowlist = array('home.php','about.php');

//GET THE PAGE PARAMETER
$page = isset($_GET['page']) ? $_GET['page'] : 'home.php';

//SERVER SIDE INPUT VALIDATION
$filename = basename($page);
if (!in_array($filename,$allowlist,true)){
header('400 Bad Request');
die('Invalid page requested');
}

//INCLUDING THE VALIDATED FILE
include($filename);
?>

<!DOCTYPE html>
<html>
<head>
<title>Secure Demo App</title>
</head>
<body>
<h1>Welcome to the Secure Demo App</h1>
<p>Choose a page:</p>
<ul>
<li><a href="?page=home.php">Home</a></li>
<li><a href="?page=about.php">About</a></li>
</ul>
</body>
</html>