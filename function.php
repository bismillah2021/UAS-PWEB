<?php
    session_start();
    //membuat koneksi ke database
    $conn = mysqli_connect("localhost","root","","uas");

    //Menambah barang baru
    if(isset($_POST['addnewbarang'])){
        $namabarang = $_POST['namabarang'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];

        $addtotable = mysqli_query($conn, "insert into stok (namabarang, deskripsi, stok) values('$namabarang', '$deskripsi', '$stok')");
        if($addtotable){
            header('location:index.php');
        }
        else{
            echo 'Gagal';
            header('location:index.php');
        }
    }
        
    
?>