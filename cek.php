<?php
    //cek php ini digunakan untuk jika belum login
    if(isset($_SESSION['log'])){

    }
    else{
        header('location:login.php');
    }
?>