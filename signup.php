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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        $company = $_POST["company"];
        $phoneno = $_POST["phoneno"];
        //to check same user exist or not
        $existemail = "select * from users where user_email='$email'";
        $result = mysqli_query($conn, $existemail);
        $numexistrow = mysqli_num_rows($result);
        if ($numexistrow > 0) {
            echo "<font color='darkred'>" .  "User already exists" . " </font>";
        } else {
            if ($pass == $cpass) {
                $sql = "INSERT INTO `users` (`user_name`, `user_email`,
                 `user_password`, `user_company`, `user_phoneno`) 
                VALUES ('$name', '$email', '$pass', '$company', '$phoneno')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<font color='darkgreen'>" . "Success! now you can 
                    login" . " </font>";
                }
            } else {
                echo "<font color='darkred'>" .   "Password! 
                entered is not same" . " </font>";
            }
        }
    }
}
require 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('signup.html.twig');
