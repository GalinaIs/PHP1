<?php
function getGallery($pathToMinImageDir, $pathToFullImageDir, &$arrayMinImage, &$arrayFullImage) {
    if ($handle = opendir($pathToMinImageDir)) {
        while ($file = readdir($handle)) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            if (is_dir($pathToMinImageDir . $file)) {
                getGallery($pathToMinImageDir . $file . '/', $pathToFullImageDir . $file . '/', $arrayMinImage, 
                    $arrayFullImage);
            } else {
                $arrayMinImage[] = $pathToMinImageDir . $file;
                $arrayFullImage[] = $pathToFullImageDir . $file;
            }
        }

        closedir($handle);
    }
}
?>