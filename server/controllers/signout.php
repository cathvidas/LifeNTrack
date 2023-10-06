<?php
session_start();
include_once('../controllers/updateUserStatus.php');
updateStatus('Inactive');
session_destroy();
header("Location: ../../client/public");
?>