<?php

function insertHead(){
    echo'
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cofeemaker.ru</title>
        <link type="text/css" rel="stylesheet" href="/style.css">
        <script src="/js/header.js" defer></script>
        <script src="/js/form.js" defer></script>
        <script src="/js/menu.js" defer></script>
        <script src="/js/script.js" defer></script>
        <link rel="icon" href="/img/favicon.ico" type="images/x-icon"> 
    ';
    }

function insertHeader(){
echo'
    <audio id="bgAudio" src="/music/bgsound.mp3" loop></audio>
    <script>
        var audio = document.getElementById("bgAudio");
        audio.volume = 0.05;
        audio.play()
    </script>
    <header>
    <nav>
        <ul class=" lsnone menu">
            <li>
                <a class="link" href="/"><img class="logo" src="/img/logo.png" alt="На главную"></a>
            </li>
            <!--Главное меню-->
            <li style="cursor: pointer;">
                <div onclick="showMenu()">Меню</div>
                <ul class="submenu lsnone">
                    <hr class="list" />
                    <li><a class="link" href="/shop/salads/">Салаты</a></li>
                    <hr class="list" />
                    <li><a class="link" href="/shop/drinks/">Напитки</a></li>
                    <hr class="list" />
                </ul>
            </li>
            <!--/Главное меню-->';
			if (empty($_SESSION["login"]) or empty($_SESSION["id"]))
			{echo'<li><a class="link" href="/login.html">Войти</a></li>';}
			else
			{echo'<li><a class="link" href="/php/exit.php">Выйти</a></li>';}
        echo'    
        </ul>
    </nav>
    </header>
	';
}

function insertNews(){
    echo'
        <aside>
            <div class="news">
                <div>
                    Новое в меню:
                </div>
                <div>
                    <a class="link" href="/shop/salads/index.html#sr1">
                    Салат с сухариками королевский
                    </a>
                </div>

                <div>
                    <a class="link" href="/shop/salads/index.html#sr2">
                    Салат "Ёжик"
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/salads/index.html#sr3">
                    Салат "Мужские слезы"
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/drinks/index.html#sr1">
                    Эспрессо
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/drinks/index.html#sr2">
                    Доппио
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/drinks/index.html#sr3">
                    Капучино
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/drinks/index.html#sr4">
                    Латте
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/drinks/index.html#sr5">
                    Раф
                    </a>
                </div>
                <div>
                    <a class="link" href="/shop/drinks/index.html#sr6">
                    Фильтр-кофе
                    </a>
                </div>
            </div>
        </aside>
    ';}

function insertFooter(){
echo'
        <footer>
        <nav>
            <ul class="lsnone menu">
                <li>
                    <div class="link" onclick="showFeed()">Обратная связь</div>
                    <ul class="feedback lsnone">
                        <li>
                            <form id="form" action="#">
                                <div class="form_body">
                                    <div class="form_item">
                                        <label for="Email" class="form_label">почта для связи с вами*</label>
                                        <input name="Email" id="Email" class="form_input Email _req" type="text">
                                    </div>
                                    <div class="form_item">
                                        <label for="Comment" class="form_label">ваш комментарий*</label>
                                        <textarea name="Comment" id="Comment" class="form_input _req"></textarea>
                                    </div>
                                    <div class="form_item">
                                        <button type="submit" class="form_button">Отправить</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
                <li>Сайт Cofeemaker.ru, 2021 год</li>
                <li style="display: flex;"><img src="/img/language/russia.png" alt="флаг" class="language">
                    <select>
                        <option value="Русский">Русский</option>
                    </select>
                </li>
            </ul>
        </nav>
        </footer>
	';
}
?>