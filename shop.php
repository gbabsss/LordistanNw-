
<?php
session_start();
echo '<h2>Mağaza Sayfası</h2>';
if(isset($_SESSION['username'])) {
    echo "<p>Hoşgeldiniz, " . $_SESSION['username'] . "!</p>";
    echo "<a href='cart.php'>Sepetinizi Görüntüle</a>";
} else {
    echo "<p>Lütfen giriş yapın.</p>";
}
?>
    