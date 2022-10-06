<?php session_start(); /* => */

	if(isset($_POST['Submit'])){
		$logins = array('1' => '1');

		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:principale.php");
			exit;
		} else {
			$msg="<span style='color:red'>Informations de connexion invalide</span>";
		}
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="/css/style.css" rel="stylesheet">
</head>
<body>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>connexion</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">E-mail ou nom d'utilisateur</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Mot de passe</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="connexion" class="Button3"></td>
    </tr>
    <tr>
      <td><br></td>
      <td><a href="./aider.php" class="Button3" align="right">Aide (Comment créer un compte)</a></td>
    </tr>
  </table>
</form>
</body>
</html>
