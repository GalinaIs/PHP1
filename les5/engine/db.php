<?php
define('SERVER_DB', 'localhost');
define('USER_DB', 'root');
define('PASSWORD_USER_DB', '');
define('DB_IMAGE', 'myGallery');
define('IMAGE_TABLE', 'myImageInfo');

function readDirAndWriteInDB($pathToMinImageDir, $pathToFullImageDir, $conn) {
    if ($handle = opendir($pathToMinImageDir)) {
        while ($file = readdir($handle)) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            if (is_dir($pathToMinImageDir . $file)) {
                readDirAndWriteInDB($pathToMinImageDir . $file . '/', $pathToFullImageDir . $file . '/', $conn);
            } else {
                $sizeFile = filesize($pathToFullImageDir . $file);
                $sql = "Insert into " . IMAGE_TABLE . " (name_file, full_path, min_path, size_full_file, count_view) values ('$file', '$pathToFullImageDir$file', '$pathToMinImageDir$file', '$sizeFile','0')";

                if (!$res = mysqli_query($conn, $sql)) {
                    var_dump(mysqli_error($conn));
                }
            }
        }

        closedir($handle);
    }
}

function fillDBFromDir($pathToMinImageDir, $pathToFullImageDir) {
    $conn = mysqli_connect(SERVER_DB, USER_DB, PASSWORD_USER_DB, DB_IMAGE);

    if ($conn) {
        readDirAndWriteInDB($pathToMinImageDir, $pathToFullImageDir, $conn);
        
        mysqli_close($conn);
    } else {
        echo "Невозможно подключиться к БД <br>";
    }
}

function addImageInDB($fileName, $pathToMinImage, $pathToFullImage) {
    $conn = mysqli_connect(SERVER_DB, USER_DB, PASSWORD_USER_DB, DB_IMAGE);   

    if ($conn) {
        $sizeFile = filesize($pathToFullImage);
        $sql = "Insert into " . IMAGE_TABLE . " (name_file, full_path, min_path, size_full_file, count_view) values ('$fileName','$pathToFullImage', '$pathToMinImage', '$sizeFile','0')";
        if (!$res = mysqli_query($conn, $sql)) {
            var_dump(mysqli_error($conn));
        };
        
        mysqli_close($conn);
    } else {
        echo "Невозможно подключиться к БД <br>";
    }
}

function getGalleryFromDB() {
    $conn = mysqli_connect(SERVER_DB, USER_DB, PASSWORD_USER_DB, DB_IMAGE);

    if ($conn) {
        $sql = "select * from " . IMAGE_TABLE . " order by count_view DESC";
        if (!$res = mysqli_query($conn, $sql)) {
            var_dump(mysqli_error($conn));
        };

        $arrayImage = mysqli_fetch_all($res, MYSQLI_ASSOC);
        mysqli_close($conn);
    } else {
        echo "Невозможно подключиться к БД <br>";
    }

    return $arrayImage;
}

function getOneImageFromDB(int $id) {
    $conn = mysqli_connect(SERVER_DB, USER_DB, PASSWORD_USER_DB, DB_IMAGE);    

    if ($conn) {
        $sql = "select * from " . IMAGE_TABLE . " where id={$id}";
        if (!$res = mysqli_query($conn, $sql)) {
            var_dump(mysqli_error($conn));
        };
        
        $oneImage = mysqli_fetch_assoc($res);
        $countView = $oneImage['count_view'] + 1;

        $sql = "update " . IMAGE_TABLE . " SET count_view={$countView} WHERE id={$id}";
        if (!$res = mysqli_query($conn, $sql)) {
            var_dump(mysqli_error($conn));
        };

        $oneImage['count_view'] = $countView;

        mysqli_close($conn);
    } else {
        echo "Невозможно подключиться к БД <br>";
    }

    return $oneImage;
}
?>