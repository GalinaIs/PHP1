<?php
include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "base.php";
include ENGINE_DIR . "users.php";
include ENGINE_DIR . "render.php";

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    if (resultUserRegistration($login, $password, $name)){
        $user = getUserByLoginPass($login, $password);
        $_SESSION['user_id'] = $user['id'];
        redirect('account.php');
    } else {
        $message = "Пользователь с такой парой - логин и пароль уже существует!"; 
    }
}

$message = '';

if (!$userId = $_SESSION['user_id']) {
    $message .= ' Вы не зарегистрированы на сайте';
} else {
    $message .= ' Вы уже зарегистрированы на сайте';
}

render('registration', ['message' => $message]);
?>