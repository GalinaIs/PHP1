<?php
function includeOneDir($files, $dir) {
    foreach($files as $file) {
        if (!in_array($file, ['..', '.'])) {
            if (substr($file, -4) == '.php') {
                include_once $dir . DIRECTORY_SEPARATOR . $file;
            }
        }
    }
}

function autoload() {
    includeOneDir(scandir(ENGINE_DIR), ENGINE_DIR);
    includeOneDir(scandir(VENDOR_DIR), VENDOR_DIR);
}

autoload();
?>