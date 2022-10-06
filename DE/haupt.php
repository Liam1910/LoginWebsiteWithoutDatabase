<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:einloggen.php");
	exit;
}
?>

<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <h1>Meine Lieblings Websites</h1>
 <br>
 <br>
 <br>
 <ol>
  <li><a href="https://www.youtube.com" class="YouTube">YouTube.com</a></li>
  <br>
  <br>
  <li><a href="https://www.easyeda.com" class="EasyEDA">EasyEDA.com</a></li>
 <br>
 <br>
  <li><a href="https://www.kbhgames.com/friday-night-funkin" class="FnF">Friday Night Funkin</a></li>
  <br>
  <br>
  <li><a href="https://www.winworldpc.com" class="WinWorld">WinWorldPc.com</a></li>
  <br>
  <br>
  <li><a href="https://www.webador.de" class="Webador">Webador.de</a></li>
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
 <a href="./Knopf.php" class="Link">Du kannst die Links nicht öffnen??? Klicke hier!!!</a>
 <br>
 <br>
 <br>
 <a href="/logout.php" class="Link">Ausloggen</a>
</body>
    
</html>
