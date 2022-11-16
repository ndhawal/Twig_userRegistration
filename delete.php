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
if (isset($_GET['deleteid'])) {
    $sn = $_GET['deleteid'];
    $sql = "delete from users where id=$sn";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Deleted successfuly";
        header("location:usermanage.php");
    } else {
        die(mysqli_error($conn));
    }
}
