
<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo "<p>Lütfen giriş yapın!</p>";
} else {
    echo "<h2>Sepetiniz</h2>";
    echo "<p>Burada sepetinizin içeriği olacak.</p>";
}
?>
    