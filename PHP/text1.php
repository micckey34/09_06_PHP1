<?php
date_default_timezone_set('Asia/Tokyo');
$text = $_POST['text1'];
$today = date("Y-m-d H:i:s");
$write_data = " {$text}\n {$today}\n";

$file = fopen('data/text1.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("location:../index.php");
