<?php
/**
 * Establish  connection to database
 * PHP Version 7
 * 
 * @category About
 * @package  Bui
 * @author   Nguyễn Ngọc Khánh <1411768@hcmut.edu.vn>
 * 
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link    https://www.facebook.com/nnkti 
 * */
$username = 'root';
$password = "";
$hostname = "localhost";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysqli_select_db($dbhandle, 'bui')
or die("Could not select bui");
?>