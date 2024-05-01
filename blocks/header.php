<header class="container">
            <span class="logo">logo</span>
            <nav>
                <ul>
                    <li class="active"><a href="/">Главная</a></li>
                    <li><a href="/about.php">про нас</a></li>
                
                    <?php 
                        if(isset($_COOKIE['login']))
                        echo '<li><a href="/user.php">кабинет пользователя</a><li>';
                    else 
                    echo '<li><a href="/reg.php">регистрация</a></li>   <li><a href="/auth.php">авторизация</a></li>';
                    ?>

                    <li><a href="/reg.php">регистрация</a></li>
                    <li><a href="/auth.php">авторизация</a></li>
                    <li class="btn"><a href="/contacts.php">Contacts</a></li>
                </ul>
            </nav>
        </header>