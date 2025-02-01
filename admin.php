
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
}
echo "<h2>Admin Paneli</h2>";
?>
    <p>Yönetici işlemleri burada olacak.</p>
    