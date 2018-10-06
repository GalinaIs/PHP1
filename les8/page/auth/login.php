<?php
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($user = getUserByLoginPass($login, $password)) {  
        session_start();
        $_SESSION['user_id'] = $user['id'];
        redirect('account');
    } else {
        $message = 'Неверная пара: логин и пароль';
        redirect('registration.php');
    }
    
}

render('login', []);
?>