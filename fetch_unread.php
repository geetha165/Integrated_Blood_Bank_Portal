<?php
session_start();
include("config.php");

// Unread messages count edukanum
$sql = "SELECT COUNT(*) AS unread_count FROM messages WHERE STATUS = '1'";
$result = $con->query($sql);
$row = $result->fetch_assoc();

// Count display panna
echo $row['unread_count'];
?>
