<?php
    include "servis/db.php";
    if (isset($_post['register'])) {
        $username = $_post["username"];
        $password = $_post["password"];
    
    $sql = "INSERT INTO users (username, password) VALUES 
    ('$username', '$password')";
    
    if($db->query($sql)) {
        echo "Registrasi Berhasil!";
    } else {
        echo "Gagal Registrasi";
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
    <h3>Daftar Akun</h3>
    <form action="register.php" method="post">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Register</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>