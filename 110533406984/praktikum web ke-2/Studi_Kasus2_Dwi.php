<!DOCTYPE html>
<html lang="en">

<head>
<title>Function Generate Table</title>
</head>

<body bgcolor="white">

<center>
<h1>FUNCTION GENERATE TABLE</h1>
<h2>_______________________________________</h2>
<hr />
<br>
<br>

<?php
function Create_table($baris, $kolom)
{

echo("<table border=\"1\">\n");

for($b = 0; $b < $baris; $b++) {
echo("<tr height=\"30px\">\n");

for($k = 0; $k < $kolom; $k++) {
echo("<td width=\"100px\"></td>\n");
}

echo("</tr>\n");
}
echo("</table>\n");

echo("<h3>Tabel : $baris baris dan $kolom kolom</h3>");
}
Create_table(4,5);
?>

</center>
</body>
</html>
