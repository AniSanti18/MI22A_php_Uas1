<?php
 /**
     * NIM : 2257401023
     * NAMA : Ani Santi
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['tbl_user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>