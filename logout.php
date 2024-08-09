<?php
     /**
     * NIM : 2257401023
     * NAMA : Ani Santi
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>