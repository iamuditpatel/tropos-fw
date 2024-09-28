 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fw-demo";

$connect = new mysqli($servername, $username, $password, $database);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "Connection Successful";
?>
