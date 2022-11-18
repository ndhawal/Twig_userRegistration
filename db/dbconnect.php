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
 * @license  http://www.gnu.org/copyleft/gpl.html General Public License
 * @link     http://www.hashbangcode.com/
 */
$server = "localhost";
$username = "root";
$password = "";
$database = "userregistration";
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn) {
} else {
    die("Error" . mysqli_connect_error());
}
