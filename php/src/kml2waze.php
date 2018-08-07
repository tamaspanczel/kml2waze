<?php

if ($argc !== 2) {
    die("use: index.php <input.kml>");
}

function getUrl($place) {
    $coords = explode(",", (string) $place->Point->coordinates);
    $lng = round((float) $coords[0] ,6);
    $lat = round((float) $coords[1] ,6);
    return "waze://?ll=" .$lat. "," .$lng. "&navigate=yes";
}

$xml = simplexml_load_file($argv[1]);
ob_start();
include_once(__DIR__ . "/template.php");
$html = ob_get_clean();

file_put_contents(str_replace('.kml', '.html', $argv[1]), $html);
