<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!$userId = $_SESSION['user_id']) {
        redirect('auth/login');
    }
    
    makeOrder($userId);
    redirect($_SERVER['HTTP_REFERER']);
}
