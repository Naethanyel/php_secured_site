<?php
// logout.php
session_start();
session_unset();
session_destroy();
?>
<html>
You are logged out. Thanks for visiting!<br>
<a href="login.html">Log in</a>
</html>