<?php 
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 2) {
    echo "Login error";
    exit;
}
 
if(strlen($password) < 4) {
    echo "password error";
    exit;
}
 
$salt = '56s89_)(*&^^&%$^#DFS';
$password = md5($salt . $password);

require "db.php";

$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql); // Здесь присваиваем результат вызова prepare() переменной $query
$query->execute([$login, $password]); // Вызываем метод execute() от переменной $query

if($query->rowCount() == 0)
    echo "такого пользователя нет";
else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    header('Location: /user.php');
    exit;
}
?>
