<?php
/**
 * * MyClass Class Doc Comment
 * php version 7
 * 
 * @var mysqli $conn 
 * 
 * @category Class
 * @package  MyPackage
 * @author   Niraj <nkrneerazz@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html  General Public License
 * @link     http://www.hashbangcode.com/
 */
require 'db/dbconnect.php';
session_start();
if (isset($_SESSION['email'])) {
    header("location:welcome.php");
} else {
    include 'login.php';
}
