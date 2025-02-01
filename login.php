
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('db.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('Location: shop.php');
    } else {
        echo "<p>Geçersiz kullanıcı adı veya şifre.</p>";
    }
}
?>
<form method="POST">
    Kullanıcı Adı: <input type="text" name="username" required><br>
    Şifre: <input type="password" name="password" required><br>
    <input type="submit" value="Giriş Yap">
</form>
    