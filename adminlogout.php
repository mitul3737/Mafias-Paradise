<?php
session_start(); // session must be continued to destroy otherwise it cant detect which it should destroy
session_unset(); // deleting all the session data
session_destroy();

header("Location: adminsigninpage.php");
exit;
?>