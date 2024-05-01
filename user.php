<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>кабинет пользователя</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <header class="container">
            <?php require_once "blocks/header.php";?>
    <div class="feedback">
        <div class="container">
            <h2>кабинет пользователя</h2>
            <p>привет: <?php echo $_COOKIE['login']; ?>.</p>



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