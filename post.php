<?php

session_start();

if(isset($_SESSION['name'])){
	$fp = fopen("log.html", 'a');
	$text = $_POST['text'];
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".$text."<br></div>");
	fclose($fp);
}
?>