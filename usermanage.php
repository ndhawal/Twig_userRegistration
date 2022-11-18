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
require 'dashboard.php';
require 'db/dbconnect.php';
$sql = "SELECT * FROM users ";
$result = mysqli_query($conn, $sql);
$total_records = mysqli_num_rows($result);
$num_per_page = 04;
$total_pages = ceil($total_records / $num_per_page);
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
        //to print success on update
if (isset($_SESSION['update'])) {
    $update = $_SESSION['update'];
    echo "<p class='msg'>$update</p>";
    unset($_SESSION['update']);
}
        $start_from = ($page - 1) * $num_per_page;
        $sql = "SELECT * FROM users limit $start_from, $num_per_page ";
        $result = mysqli_query($conn, $sql);
        $rar = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($rar, $row);
    }
}
require 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
echo $twig->render(
    'usermanage.html.twig',
    ['user_list' => $rar,'page' => $total_pages]
);
