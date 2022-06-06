<?php
setcookie(session_name(), '', time()-600);
header("Location: /project_mvp/login.php");
?>

