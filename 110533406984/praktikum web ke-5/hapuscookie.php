<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Cookie</title>
</head>

<body>
<?php
setcookie('nama', 'value');
if(isset($_COOKIE['nama'])) {
	echo 'cookie di-set <br/>';
	
	setcookie ('nama', '', time() - 1 * 3600);
	echo 'cookie dihapus';
	}else {
	echo 'unset';
	}
	
?>
<p>
Tekan Refresh;
</body>
</html>
