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
session_start();
if (!isset($_SESSION['email'])) {
    echo "please login first";
    header("location:login.php");
}
require 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('dashboard.html.twig');
