<!DOCTYPE html>
<html lang="en">

<head>
<title>By Value</title>
</head>

<?php 
function Coba($nilai) 
{ 
$nilai++; 
} 
$nilai = 5; 
Coba($nilai); 
echo $nilai; 
?>
