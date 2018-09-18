<?php

function clearDir ($pathToDir) {
    if ($handle = opendir($pathToDir)) {
        while ($file = readdir($handle)) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            if (is_dir($pathToDir . $file)) {
                clearDir($pathToDir . $file . '/');
            } else {
                unlink($pathToDir . $file);
            }
        }

        closedir($handle);
        rmdir($pathToDir);
        echo "{$pathToDir} была успешно удалена <br>";
    }
    
}

clearDir (__DIR__ . '/../image/', '');

?>