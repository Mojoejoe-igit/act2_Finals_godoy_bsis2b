<?php
session_start();

$conn = new mysqli("localhost", "root", "", "act1_joe");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function h($str){
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}
?>