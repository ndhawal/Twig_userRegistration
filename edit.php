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
if (!isset($_SESSION['email'])) {
    echo "please login first";
    header("location:login.php");
}
$sn = $_GET['editid'];
$sql = "select * from users where id=$sn";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['user_name'];
$email = $row['user_email'];
$pass = $row['user_password'];
$company = $row['user_company'];
$phno = $row['user_phoneno'];
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $company = $_POST["company"];
    $phoneno = $_POST["phoneno"];
    $sql = "UPDATE  users set id=$sn, user_name='$name', user_email='$email',
    user_password='$pass',  
        user_company='$company', user_phoneno='$phoneno' where id=$sn";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:usermanage.php");
        $_SESSION['update'] = "UPDATE DONE";
    } else {
        die(mysqli_error($conn));
    }
}
require 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('Templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('edit.html.twig',['name'=>$name,'email'=>$email,
'pass'=>$pass,'company'=>$company,'phno'=>$phno]);
?>