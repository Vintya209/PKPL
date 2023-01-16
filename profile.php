<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Profile</title>
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">
            <link href="css/sb-admin-2.css" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <h1><span class="badge badge-secondary">Laboratorium Informatika</span></h1>
            <a class="navbar-brand" href="index.php"><br><br></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Stock Alat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="masuk.php">Alat Masuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="keluar.php">Alat Keluar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
            </div>
    <div class="box">
        <img src="city.jpg" alt="" class="box-img">
        <h1>
            Vintya Dewi Anjani
        </h1>
        <h5>
            Teknik Informatika
        </h5>
        <p>
            Mahasiswa Prodi Teknik Informatika Universitas Ahmad Dahlan Semester 2
        </p>
        <ul>
            <li><a href="https://www.instagram.com/vindeanjani/"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</body>
