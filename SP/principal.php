<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:acceso.php");
	exit;
}
?>

<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <h1 class="HeadLine">Mis sitios web favoritos</h1>
 <br>
 <br>
 <br>
 <ol>
  <li><a href="https://www.youtube.com" class="YouTube">YouTube</a></li>
  <br>
  <br>
  <li><a href="https://www.easyeda.com" class="EasyEDA">EasyEDA</a></li>
 <br>
 <br>
  <li><a href="https://www.kbhgames.com/friday-night-funkin" class="FnF">Friday Night Funkin</a></li>
  <br>
  <br>
  <li><a href="https://www.winworldpc.com" class="WinWorld">WinWorldPc</a></li>
  <br>
  <br>
  <li><a href="https://www.webador.de" class="Webador">Webador</a></li>
  <br>
  <br>
  <li><a href="https://www.pdf.io" class="Pdf">PDF.io</a>
  </li>
  <br>
  <br>
  <li><a href="https://www.malwarewatch.org" class="Malware">Malwarewatch.org</a>
  </li>
  <br>
  <br>
  <li><a href="https://www.dl.malwarewatch.org" class="DLMalware">dl.Makwarewatch.org</a>
  </li>
 </ol>
 <br>
 <br>
 <a href="./Botón.php" class="Link">¿No puedes abrir los enlaces? ¡¡¡Haga clic aquí!!!</a>
 <br>
 <br>
 <br>
 <a href="/cerrar-sesión.php" class="Link">Cerrar sesión</a>
</body>
    
</html>
