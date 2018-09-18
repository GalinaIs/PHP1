<?php

function renderDirWithSubDir ($pathToDir, $indent) {
    if ($handle = opendir($pathToDir)) {
        while ($file = readdir($handle)) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            if (is_dir($pathToDir . $file)) {
                echo "<b>{$indent}{$file}</b><br>";
                renderDirWithSubDir($pathToDir . $file . '/', $indent . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
            } else {
                echo $indent .  $file . "<br>";
            }
        }

        closedir($handle);
    }
}

renderDirWithSubDir (__DIR__ . '/../image/', '');

?>