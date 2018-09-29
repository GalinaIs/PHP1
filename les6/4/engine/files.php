<?php
function uploadFile($destination, $attributeName = 'file'){
    if(isset($_FILES[$attributeName])){
        move_uploaded_file($_FILES[$attributeName]['tmp_name'], $destination );
    }
}

function getOneFileFromDir($dir) {
    return scandir($dir)[2];
}

function getAllFilesFromDir($dir) {
    return array_slice(scandir($dir), 2);
}

?>