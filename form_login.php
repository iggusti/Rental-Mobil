<?php 
//this function created by Sigit Dwi Prasetyo
//More information visit www.sixghakreasi.com / 0818956973
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login User</title>
<link rel="stylesheet" href="style/style_login.css" type="text/css"  />
</head>

<body>
<div class="LoginBody">
<form action="login.php" method="post" name="form_login" id="form_login">
	<div class="LoginHeader"><div class="teks">LOGIN USER</div></div>
    <div class="LoginLabel">User Name :</div>
	<div class="LoginInput">
	  <label>
	    <input name="username" type="text" id="noBorder" size="40" maxlength="90" />
      </label>
	</div>
    <div class="LoginLabel">Password :</div>
    <div class="LoginInput">
      <label>
        <input name="password" type="password" id="noBorder" size="40" maxlength="90" />
      </label>
    </div>
    
       <div class="tempatBtn"><input type="submit" name="login" id="btnLogin" value="login" /></div>

</form>
</div>
</body>
</html>