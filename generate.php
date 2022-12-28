<?php

$dataFolder = [];


$dirs = glob('./*', GLOB_ONLYDIR);
foreach ($dirs as $dir){
    if(glob("*.mp3")){
     $dataFolder[$dirs] = array("music" => glob("*.mp3")); 
    }
}

while($dirs = glob('./*', GLOB_ONLYDIR)) {

}


$dataMusic = fopen("data.json", "w") or die("Unable to open file!");

fwrite($dataMusic, json_encode($dataFolder));

fclose($dataMusic);
?>
