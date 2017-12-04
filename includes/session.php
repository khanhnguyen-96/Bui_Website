<?php
/**
 * Session
 * PHP Version 7
 * 
 * @category About
 * @package  Bui
 * @author   Nguyễn Ngọc Khánh <1411768@hcmut.edu.vn>
 * 
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link    https://www.facebook.com/nnkti 
 * */
session_start();
require 'include/connect.php';
if (isset($_SESSION["username"]) == false && isset($_SESSION["password"]) == false) {
    // TODO 
    echo 'You didn\'t login! Navigating to login page in 3 seconds...';
    header("refresh:3;url=login.php");
    exit;
}

if (isset($_GET['username']) && isset($_GET['password'])) {
    // TODO 
    $_SESSION["username"] = $_GET['username'];
    $_SESSION["password"] = $_GET['password'];
    echo '<script language="javascript">';
    echo 'alert("Welcome! Navigating to intro page after clicking OK...")';
    echo '</script>';
    header("refresh:0;url=intro.php");
    exit;
}
?>