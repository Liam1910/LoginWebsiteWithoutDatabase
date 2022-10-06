<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:giriş.php");
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
 <p class="EasyEDA" id="EasyEDAP"><p>
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
 <button class="Malware" onclick="Malware()">Malwarewatch</button>
 <p class="Malware" id="MalwareP"></p>
 <br>
 <br>
 <button class="DLMalware" onclick="DLMalware()">Malwarewatch</button>
 <p class="DLMalware" id="DLMalwareP"></p>
 <br>
 <br>
 <a href="./ana.php" class="Link">Geri dön</a>

 <script src="/scripts/js/script.js"></script>
</body>
    
</html>
