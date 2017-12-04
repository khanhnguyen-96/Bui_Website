<?php
/**
 * Header include
 * PHP Version 7
 *
 * @category Header
 * @package  Bui
 * @author   Khánh <nnkti18@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://www.facebook.com/nnkti
 */
?>
<!DOCTYPE html>
<html lang="vi" class="full-height">

<head>
    <title><?php $title?></title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style_home.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/daypicker.css">
</head>

<body class="">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark my-nav mb-0">
        <a class="navbar-brand d-block align-middle" href="#" id="left-logo">
            <img src="img/logo.png" alt="logo" class="p-2">
        </a>
        <button class="navbar-toggler" type="button" 
        data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-75" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item waves-effect waves-light
                <?php 
                if ($nav_active =='index') { 
                    echo 'active';
                }
                ?>
                ">
                    <a class="nav-link align-middle" href="index.html">
                        <h3>TRANG CHỦ</h3>
                    </a>
                </li>
                <li class="nav-item waves-effect waves-light 
                <?php 
                if ($nav_active =='book') { 
                    echo 'active';
                }
                ?>">
                    <a class="nav-link align-middle" href="book.php">
                        <h3>ĐẶT VÉ</h3>
                    </a>
                </li>
                <li class="nav-item waves-effect waves-light
                <?php 
                if ($nav_active =='discount') { 
                    echo 'active';
                }
                ?>
                ">
                    <a class="nav-link align-middle" href="Discount.html">
                        <h3>KHUYẾN MÃI</h3>
                    </a>
                </li>

                <li class="nav-item waves-effect waves-light
                <?php 
                if ($nav_active =='news') { 
                    echo 'active';
                }
                ?>
                ">
                    <a class="nav-link" href="News.html">
                        <h3>TIN TỨC</h3>
                    </a>
                </li>
                <li class="nav-item waves-effect waves-light
                <?php 
                if ($nav_active =='gallery') { 
                    echo 'active';
                }
                ?>
                ">
                    <a class="nav-link" href="Gallery.html">
                        <h3>THƯ VIỆN</h3>
                    </a>
                </li>
                <li class="nav-item waves-effect waves-light
                <?php 
                if ($nav_active =='about') { 
                    echo 'active';
                }
                ?>
                ">
                    <a class="nav-link" href="About.html">
                        <h3>GIỚI THIỆU</h3>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>