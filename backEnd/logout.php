<?php
session_start();
    
if(isset($_SESSION['auth'])){
        session_destroy();
        header("location: ../index.php");
        exit();
    }