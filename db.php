<?php

$conn = new mysqli("localhost","root","","test");
session_start();

if (!$conn) {
    echo "<script> alert('Connection Failed')</script>";
}
?>
