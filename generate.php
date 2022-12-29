<?php

$dataFolder = [];


$dirs = glob('./*', GLOB_ONLYDIR);
foreach ($dirs as $index => $dir){
    $key = explode("/",$dir)[1];
    $dataFolder["data"][$index][$key] = [];

    if(glob($dir.'/*.mp3')){
        echo $dir;
        $allmusic = glob($dir.'/*.mp3');

        foreach($allmusic as $idx => $music){
            // if(empty($dataFolderp["data"][$index][$key])){
            //     $dataFolder["data"][$index][$key] = [];
            // }
            array_push($dataFolder["data"][$index][$key],array("no" => $idx, "music" => explode("/",$music)[2]));
        }
        
    }
}


$dataMusic = fopen("data.json", "w") or die("Unable to open file!");

fwrite($dataMusic, json_encode($dataFolder));

fclose($dataMusic);
?>
