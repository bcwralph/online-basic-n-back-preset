<?php
$num = $_POST["putSubHere"];
$mTurkCode = $_POST["putmTurkCodeHere"];
$data = $_POST["putDataHere"];

file_put_contents("myData.txt", $num . ",", FILE_APPEND);
file_put_contents("myData.txt", $mTurkCode . ",", FILE_APPEND);
file_put_contents("myData.txt", $data . "\n", FILE_APPEND);

include("lastPage.html");
#header(str_replace('XXXX', $num, "location: https:/---&id=XXXX"));

?>
