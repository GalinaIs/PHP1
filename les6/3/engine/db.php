<?php
function getConnection() {
    static $conn = null;
    if (is_null($conn)) {
        $config = include CONFIG_DIR . 'db.php';
        $conn = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
    }

    return $conn;
}

function execute($sql) {
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

function closeConnection() {
    return mysqli_close(getConnection());
}

function getError() {
    return mysqli_error(getConnection());
}
?>