<?php
function addFeedback($name, $subject, $message) {
    $name = (string)htmlspecialchars(strip_tags($name));
    $subject = (string)htmlspecialchars(strip_tags($subject));
    $message = (string)htmlspecialchars(strip_tags($message));
    $sql = "Insert into feedbacks (name_user, subject, message) values ('{$name}', '{$subject}', '{$message}')";
    return execute($sql);
}

function getAllFeedBacks() {
    return queryAll("select * from feedbacks");
}
?>