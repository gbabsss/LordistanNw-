
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lordistan';

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}
?>
    