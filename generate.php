<?php

$dataFolder = [];


while($dirs = glob('./*', GLOB_ONLYDIR)) {
    if(glob("*.mp3")){
     $dataFolder[$dirs] = array("music" => glob("*.mp3")); 
    }
}


$dataMusic = fopen("data.json", "w") or die("Unable to open file!");

fwrite($dataMusic, json_encode($dataFolder));

fclose($dataMusic);
?>
