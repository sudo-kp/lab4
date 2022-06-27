<?php
    if (!$_GET['day']) {
        $day = 13;
    } else {
        $day = $_GET['day'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="container-styles.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТЕАТР ДАХ</title>
</head>
<body>
<header>
    <img class="dropbtn" onclick="myFunction()" src="images/menu-bar.svg">
    <div id="logo">
        <img src="images/logo.svg" alt="logo">
    </div>
    <div id="label">
        <p>ТЕАТР СУЧАСНОГО МИСТЕЦТВА ДАХ</p>
        <!--<h1>МИСТЕЦТВА ДАХ</h1>-->
    </div>
    <div id="nav">
        <nav>
            <a href="index.html">ГОЛОВНА</a>
            <a href="#" class="selected-menu-item">АФІША</a>
            <a href="#">АКТОРИ</a>
            <a href="#">КОНТАКТИ</a>
        </nav>
    </div>
    <div id="cart">
        <img src="images/cart.svg" alt="cart">
    </div>
</header>


<div id="myDropdown" class="dropdown-content">
    <a href="index.html">ГОЛОВНА</a>
    <a href="container.html" class="selected-menu-item-mob">АФІША</a>
    <a href="#">АКТОРИ</a>
    <a href="#">КОНТАКТИ</a>
</div>

<div id="date-selector">
    <h1>АФІША</h1>

    <form method="get" action="get.php">
        <div id="month-container">
            <input type="radio" id="april" name="month" value="4" checked><label for="april">КВІТЕНЬ 2022</label>
            <input type="radio" id="may" name="month" value="5"><label for="may">ТРАВЕНЬ 2022</label>
            <input type="radio" id="june" name="month" value="6"><label for="june">ЧЕРВЕНЬ 2022</label>
        </div>


        <label for="day">День</label><br>
        <input type="number" id="day" min="1" max="31" name="day" value=<?php echo $day?> size="2">
        <input type="submit" value="Submit" hidden>
    </form>
    <div id="weekday">Середа</div>
</div>

<div id="show-container">
    <div class="show-box">
        <div class="left-box">
            <h3 class="show-name">«Стус: Перехожий» [Камерна опера]</h3>
            <div class="show-coordinates">
                <h5><?php echo $day?> квітня</h5>
                <h5>16:00</h5>
                <h5>ЦМС “ДАХ”</h5>
            </div>
            <div class="show-short-description">
                <p>
                    «Стус: Перехожий» – це медитативна камерна опера про любов, ніжність та тендітність життя.
                </p>
                <p class="longer-description">
                    Працювати над проєктом тріо почало в березні 2019.
                    Робота почалась з того що KLIM приніс на заняття
                    декілька віршів Василя Стуса і сказав: «Давайте
                    спробуємо».
                </p>
            </div>
            <a href="informational.html">
                <div class="details-button">
                    Детальніше
                </div>
            </a>
        </div>
        <img class="show-image" src="images/show1.png">
    </div>
    <div class="show-box">
        <div class="left-box">
            <h3 class="show-name">ALONE [ЦИФРОВА ОДІССЕЯ]</h3>
            <div class="show-coordinates">
                <h5>13 квітня</h5>
                <h5>17:00</h5>
                <h5>ЦМС “ДАХ”</h5>
            </div>
            <div class="show-short-description">
                <p>В житті людини є такий час, коли вона лишається наодинці із самою собою…</p>
                <p>це час переходу, переміни, важливого рішення,</p>
                <p>зустрічі віч-на-віч:</p>
                <p class="longer-description">зі своєю суттю,</p>
                <p class="longer-description">з долею,</p>
                <p class="longer-description">з викликами життя,</p>
                <p class="longer-description">з глибинними внутрішніми питаннями,</p>
            </div>
            <a href="#">
                <div class="details-button">
                    Детальніше
                </div>
            </a>
        </div>
        <img class="show-image" src="images/show2.png">
    </div>
    <div class="show-box">
        <div class="left-box">
            <h3 class="show-name">Сповідь або «Крові прагну» [Моновистава]</h3>
            <div class="show-coordinates">
                <h5>13 квітня</h5>
                <h5>18:00</h5>
                <h5>ЦМС “ДАХ”</h5>
            </div>
            <div class="show-short-description">
                <p class="longer-description">
                    Моновистава від актора ЦСМ «ДАХ» про абсурдність
                    людського світосприйняття за творами Антона Чехова.
                    Чеховських героїв вирізняє насамперед те,
                    що вони занадто серйозно ставляться до
                    свого життя. У результаті, від цього
                    трагічного світосприйняття, вони стають
                    ще більш милими та смішними. А всі
                    несуттєві…
                </p>
                <p class="shorter-description">
                    Моновистава від актора ЦСМ «ДАХ» про абсурдність
                    людського світосприйняття за творами Антона Чехова.
                    Чеховських героїв вирізняє насамперед...
                </p>
            </div>
            <a href="#">
                <div class="details-button">
                    Детальніше
                </div>
            </a>
        </div>
        <img class="show-image" src="images/show3.png">
    </div>
    <div class="show-box">
        <div class="left-box">
            <h3 class="show-name">Про що казав Заратустра [Цифрові театральні уроки]</h3>
            <div class="show-coordinates">
                <h5>13 квітня</h5>
                <h5>18:00</h5>
                <h5>Арт-центр "Табір"</h5>
            </div>
            <div class="show-short-description">
                <p class="longer-description">
                    Це театральні уроки, вірніше спроба перекласти
                    цей процес пізнання на мову театру, а значить
                    спроба не тільки емоційного і логічного пізнання,
                    а перш за все — це шлях, вірніше лабіринт, можна
                    сказати, жіночого пізнання філософського тексту
                    через кохання.
                </p>

                <p class="shorter-description">
                    Це театральні уроки, вірніше спроба перекласти
                    цей процес пізнання на мову театру, а значить
                    спроба не тільки емоційного і логічного пізнання,
                </p>
            </div>
            <a href="#">
                <div class="details-button">
                    Детальніше
                </div>
            </a>
        </div>
        <img class="show-image" src="images/show4.png">
    </div>
</div>

<div id="vertical-show-container">
    <div class="show-box">
        <h3 class="show-name">«Стус: Перехожий»</h3>
        <div class="show-coordinates">
            <h5>16:00</h5>
            <h5>ЦМС “ДАХ”</h5>
        </div>
        <div class="show-short-description">
            <p>«Стус: Перехожий» – це медитативна
                камерна опера про любов, ніжність
                та тендітність життя.</p>
        </div>
        <img class="show-image" src="images/show1.png">

    </div>
    <div class="show-box">
        <h3 class="show-name">«ALONE»</h3>
        <div class="show-coordinates">
            <h5>17:00</h5>
            <h5>ЦМС “ДАХ”</h5>
        </div>
        <div class="show-short-description">
            <p>В житті людини є такий час,
                коли вона лишається наодинці
                із самою собою…</p>
        </div>
        <img class="show-image" src="images/show2.png">

    </div>
    <div class="show-box">
        <h3 class="show-name">«Про що казав Заратустра»</h3>
        <div class="show-coordinates">
            <h5>18:00</h5>
            <h5>Арт-центр "Табір"</h5>
        </div>
        <div class="show-short-description">
            <p>
                Це театральні уроки, вірніше спроба перекласти
                цей процес пізнання на мову театру, а значить...
            </p>
        </div>
        <img class="show-image" src="images/zaratustra.png">

    </div>
    <div class="show-box">
        <h3 class="show-name">Сповідь або «Крові прагну»</h3>
        <div class="show-coordinates">
            <h5>19:00</h5>
            <h5>ЦМС “ДАХ”</h5>
        </div>
        <div class="show-short-description">
            <p>
                Моновистава від актора ЦСМ «ДАХ» про абсурдність
                людського світосприйняття за творами Антона Чехова.
            </p>
        </div>
        <img class="show-image" src="images/show3.png">

    </div>
</div>

<footer>
    <div id="footer-image">
        <img id="footer-image-big" src="images/footer.svg">
        <img id="footer-image992" src="images/footer992.svg">
        <img id="footer-image768" src="images/footer768.svg">
        <img id="footer-image575" src="images/footer575.svg">
    </div>
    <div id="footer-logo-container">
        <img id="footer-logo" src="images/footer-logo.svg">
    </div>
    <div id="footer-nav">
        <a href="#">Лінки</a>
        <a href="#">Вистави</a>
        <a href="#">Фестивалі</a>
        <a href="#">Історія</a>
    </div>
    <div id="socials">
        <a href="#"><ion-icon name="call-outline"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="mail-outline"></ion-icon></a>
    </div>
    <div id="info">
        <p>Наша адреса:</p>
        <p>м.Київ,</p>
        <p>вул.Велика Васильківська, 136.</p>
        <p>тел\факс: (044) 529-40-62</p>
    </div>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="menu.js"></script>
</body>
</html>
