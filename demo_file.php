<?php
$myObj = new stdClass();
$myObj->name = "name";
$myObj->test2 = "test2";
$myObj->test3 = "test3";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
