<?php

$data=[1,2,3,4,5,6,7];

echo json_encode($data);

$dataCode="[1,2,3,4,5,7,86,5]";

foreach(json_decode($dataCode) as $key)
{
    echo $key.PHP_EOL;
}

$getjson=file_get_contents(__DIR__.'/data.json');

echo $getjson;