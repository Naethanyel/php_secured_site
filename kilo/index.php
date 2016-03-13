<?php
// kilo/index.php
session_start();
//if (isset($_SESSION['username']) != 'thename') {
if (isset($_SESSION['username']) != '$enteredusername') {
    header('Location: ../login.html');
}
else{
?>
<html>
	<body>
		<p>Welcome to the secured site!</p>
		<a href="../logout.php">Log out</a>
	</body>
</html>
<?php } ?>