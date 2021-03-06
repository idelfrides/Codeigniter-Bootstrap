
<?php

/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 23/05/2018
 * Time: 11:42
 *
 *@authors: idelfrides Jorge, Jairo Alves,  Eric Vinícius and Ghlazyanno Braga
 *
 * Descrition: this file contain the base header HTML script for all app pages
 */
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CI&BT4</title>
    <meta charset="UTF-8">
    <meta name="author" content="Idelfrides Jorge and others">
    <meta name="description" content="Atividade 02 da disciplina Tecnologias Web - Criar um site usando Bootstrap 4.0">
    <meta name="keywords" content="HTML,CSS,Bootstrap 4, jQuery">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url("static/img/favicon.png") ;?>">

    <!--  bootstrap css -->
    <link rel="stylesheet" href="<?=base_url("static/css/bootstrap.min.css");?>">

    <link href="<?=base_url("static/css/header-footer-style.css");?>" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body id="bg-page">

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #346d8d;">
    <div class="container">
        <a href="<?=base_url("main/view/home");?>" id="home-style">
            <img id="icon-home" src="http://localhost/Sistem-Codeigniter-Bootstrap/static/img/home.png" width="40" height="40" title="Home" style="background-color: transparent;">
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto" id="navbarSite2">
                <li class="nav-item">
                    <a class="nav-link text-lg-center text-white text-uppercase" href="<?=base_url("main/view/sobre");?>">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-center text-white text-uppercase" href="<?=base_url("main/view/contato");?>">Contatos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br>