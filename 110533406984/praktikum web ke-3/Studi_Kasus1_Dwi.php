<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER ['PHP_SELF'];?>" method="post">
JOB
<select name="job">
<option value="GURU" CHECKED>GURU
<option value="PENGUSAHA">PENGUSAHA
<option value="DOKTER">DOKTER
<option value="POLISI">POLISI
</select><br/>

<input type="submit" value="OK" />
</form>

<?php
if(isset($_POST ['job']))  {
echo $_POST ['job'];
}
?>
</body>
</html>