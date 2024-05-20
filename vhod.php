<?php
session_start();

if ($_SESSION['client']) {
    header('Location: order.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эх, прокачу!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <!-- форма Автоизации  -->
    <div class = "textH2">
    <h2>Авторизация</h2>
</div>
<form action="vendor/signin.php" method="post" >
        <label>Email</label>
        <input type="text" name="email" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль" required>
        <button type="submit">Войти</button>
    </form>
    </main>
</body>
</html>