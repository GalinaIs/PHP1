<?php
header("Content-type: text/html; charset=utf-8");

include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "feedback.php";
include ENGINE_DIR . "base.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $error = addFeedback($_POST['name'], $_POST['subject'], $_POST['message']);
    
    if(!$error) {
        var_dump(getError());
    } else {
        redirect($_SERVER['PHP_SELF']);
    };
}

$feedbacks = getAllFeedBacks();
closeConnection();

include TEMPLATES_DIR . "feedback.php";
?>