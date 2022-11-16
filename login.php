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
require 'db/dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        //to check email and password
        $sql="select * from users where user_email='$email' 
        AND user_password='$pass'";
        $result=mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if ($num==1) {
            session_start();
            $_SESSION['email']= $email;
            header("location:welcome.php");
        } else {
            echo "<font color='darkred'>".  "Invalid credentials"." </font>";
        }
    }
}
require 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('login.html.twig');
?>

