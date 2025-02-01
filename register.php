
<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<p>Kayıt başarılı!</p>";
    } else {
        echo "<p>Hata oluştu, tekrar deneyin.</p>";
    }
}
?>
<form method="POST">
    Kullanıcı Adı: <input type="text" name="username" required><br>
    Şifre: <input type="password" name="password" required><br>
    <input type="submit" value="Kayıt Ol">
</form>
    