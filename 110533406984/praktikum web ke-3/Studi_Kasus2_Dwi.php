<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER ['PHP_SELF'];?>" method="post">
Hobby
<input type="checkbox" name="hobby[]" value ="Senam" CHECKED/> Senam
<input type="checkbox" name="hobby[]" value ="Menyanyi"/> Menyanyi
<input type="checkbox" name="hobby[]" value ="Fitnes"/> Fitnes <br />

<input type="submit" value="OK" />
</form>

<?php
// Ekstrasi nilai
if(isset($_POST ['hobby']))  {
foreach ($_POST ['hobby'] as $key => $val){
echo $key . '-> ' .$val .'<br />';
}
}
?>
</body>
</html>