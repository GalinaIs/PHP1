<?php
function getUserByLoginPass($login, $password) {
    return queryOne("select * from users where login='{$login}' and password='{$password}'");
}

function getUserById($id) {
    return queryOne("select * from users where id={$id}");
}

function resultUserRegistration($login, $password, $name) {
    $user = getUserByLoginPass($login, $password);
    if (!is_null($user)) {
        return false;
    }

    execute("insert into users (login, password, name) values ('{$login}', '{$password}', '{$name}')");
    return true;
}
?>