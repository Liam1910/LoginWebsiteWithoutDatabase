<?php session_start(); /* Starts the session */

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
 <button onclick="YouTube()" class="YouTube">YouTube</button>
 <p id="YouTubeP" class="YouTube"></p>
 <br>
 <br>
 <button class="EasyEDA" onclick="EasyEDA()">EasyEDA</button>
 <p class="EasyEDA" id="EasyEDAP"></p>
 <br>
 <br>
 <button class="FnF" onclick="FnF()">Friday Night Funkin</button>
 <p id="FnFP" class="FnF"></p>
 <br>
 <br>
 <button class="WinWorld" onclick="WinWorld()">WinWorldPc</button>
 <p id="WinWorldP" class="WinWorld"></p>
 <br>
 <br>
 <button class="Webador" onclick="Webador()">Webador</button>
 <p id="WebadorP" class="Webador"></p>
 <br>
 <br>
 <button class="Pdf" onclick="Pdf()">Pdf.io</button>
 <p class="Pdf" id="PdfP"></p>
 <br>
 <br>
 <a href="/haupt.php" class="Link">Zurueck</a>
 <script src="/scripts/js/script.js"></script>
</body>
    
</html>
