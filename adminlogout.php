<?php
session_start();//session continued
session_unset();//unset session
session_destroy();//destroy session

header("Location: adminsigninpage.php");
exit;
?>