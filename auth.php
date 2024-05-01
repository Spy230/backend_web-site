<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>авторизация</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <header class="container">
            <?php require_once "blocks/header.php";?>
    <div class="feedback">
        <div class="container">
            <h2>авторизация</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="post" action=/lib/auth.php>
                <div class="inline">
                    <div>
                        <label>логин</label>
                        <input type="text" name="login">
                    </div>
                <div>
                <label>пароль</label>
                <input type="password"  name="password">
                </div>
                </div>
                <button type="sumbit">авторизоваться</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="blocks container">
            <div>
                <span class="logo">logo</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <div>
                <h4>About us</h4>
                <ul>
                    <li>Zeux</li>
                    <li>Portfolio</li>
                    <li>Careers</li>
                    <li>Contact us</li>
                </ul>
            </div>
            <div>
                <h4>Contact us</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <p>+908 89097 890</p>
            </div>
        </div>
        <hr>
        <p>Copyright ® 2021 Lorem All rights Rcerved</p>
    </footer>
</body>

</html>