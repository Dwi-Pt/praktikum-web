<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title>Halaman Admin</title>
        <style type="text/css">
        body{
        background-color:#0000;
        color:#FFFFFF;
        }
        a{
        color:#FFFFFF;
        }
        .inner{
        margin: 300px auto;
        padding: 10px;
        width: 340px;
        border:5px solid #00FF00;
        }
        </style>
</head>
<body bgcolor="#0000FF">

<p>
<?php

ini_set('display_errors', 1);
define('_VALID', 1);

require_once('./auten.php');
init_login();
validate();
?>

</p>
    	<span class="style8">Selamat datang di Facebook
        </span>
       
        <h1 style="font-size:18px" style="font-style:inherit" style="border-color:#990099" style="font-stretch:ultra-condensed">
           
		<ul>
			<li>Beranda</li>
           	<li>Permintaan Pertemanan</li>
			<li>Pesan</li>
			<li>Pemberitahuan</li>
		</ul>
        <p align="center"><a href="?m=logout"><h3>Logout</h3></a></p>
</body>
 
</html>