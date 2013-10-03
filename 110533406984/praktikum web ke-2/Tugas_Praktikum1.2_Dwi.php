<!DOCTYPE html>
<html lang="en">

<head>
<title>By Reverence</title>
</head>
<?php 
function Coba(&$nilai) 
{ 
$nilai++; 
} 
$nilai = 5; 
Coba($nilai); 
echo $nilai; 
?>
