
<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo "<p>Lütfen giriş yapın!</p>";
} else {
    echo "<h2>Ödeme Sayfası</h2>";
    echo "<p>Ödeme bilgileri buraya gelecek.</p>";
}
?>
    