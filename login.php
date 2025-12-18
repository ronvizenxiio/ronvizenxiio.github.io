<?php
    include "servis/db.php";
    if (isset($_post['login'])) {
        $username = $_post['username'];
        $password = $_post['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);
    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo $data["username"];
        echo $data["password"];
    } else {
        echo "Login gagal: Username atau password salah.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?> 
    <h3>Masuk Akun</h3>
    <form action="login.php" method="post">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="login">Masuk Sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>