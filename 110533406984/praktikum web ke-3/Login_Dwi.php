<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Login Form </title>
</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onSubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
    <div align="center"><strong><br>Login :</strong>
    <div align="center"><strong><br>User Name :</strong>   
    <br>
    <input type="text" name="user" size="35" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong> 
    <br>
    <input type="password" name="pass" size="35" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
	</div>
    </div>
  </div>
  <br>
    <div id="apDiv3">
     <input type="submit" name="submit" value=" Enter" >
    </div>
     <div id="footer" align="left"><br>
    </div>
  </div>
<style type="text/css">
#apDiv1 {
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #11FFFF;
    border: 2px solid Blue;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 289px;
    top: 274px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;
    background-image: url(headerlogin.JPG);
}
#footer{
    width:373px;
    height:40px;
    background-image: url(footer.JPG);
}
body {
    background-color: #001FFF;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
}
</style>
</form>
<div id="apDiv4">
<?php
// digunakan untuk pengecheckkan apakah isi dari inputan user dan password berupa string dan apakah sudah benar atau tidak
if(is_string($_POST['user']) AND ($_POST['pass']))
{   
    if (($_POST['user']=='DwiPt')AND($_POST['pass']=='Bismilah'))
    {
        echo 'Anda berhasil masuk halaman Administrator dengan User Name:'.$_POST['user'];
        echo '<br>Hallo ' . $_POST['user'];
    }
    else
    {
        echo "<script>alert ('Username atau Password Anda Salah, Silahkan Mencoba Kembali ^_^');</script>";
    }
   
}

?>
</div>

<script type="text/javascript">
// Fungsi check digunakan untuk mengecheck kosong atau tidaknya inputtan username dan password
function check()
{
    if(form1.user.value == "")
    {
        alert('Masukkan User Name ');
        document.form1.user.focus();
        return false;
    }
    else if(form1.pass.value=="")
    {   
        alert('Masukkan Password ');
        document.form1.pass.focus();
        return false;
    }   
return true;
}

// Fungsi Huruf digunakan untuk mengecheck penggunaan selain huruf tidak diperbolehkan
function Huruf(evt)
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password (Harus Berupa Huruf) ');
        return false;
    }
    return true;
}
</script>
</body>
</html>
