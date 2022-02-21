<?php

$array = json_decode(file_get_contents('php://input'));

file_put_contents("consents.txt",date("Y-m-d H:i:s")." - ".$array->data->id." - ".implode(",",$array->level).PHP_EOL,FILE_APPEND);

?>
