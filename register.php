<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel ="stylesheet" type="text/css" href="css/style.css">
</head>
<body> 
<header class="header">
        <img class="logo" src="img/logoaec (2).svg">
            <nav class="menu1">
              <a class="sections">Главная</a>
              <a class="sections">О колледже</a>
              <a class="sections">Специальности</a>
              <a class="sections">Контакты</a>            
            </nav>
        </div>
    </header>
    
    <div class="block1">
        <img class="college-photos" src="img/college (2).png">
        <h1 class="heading1">Добро пожаловать<br> 
            в Алматинский экономический колледж!</h1>
        <button type="button" class="button1">Подать заявку</button>
    </div>
    
    <div class="block2">
        <div class="video">
            <video controls="muted" playsinline autoplay muted loop width="1366" height="632">
                <source src="img/output(compress-video-online.com).mp4" type="video/webm" />
            </video>
        </div>    
            <h1 class="heading2">О нас</h1>
            <p class="about-us">  Алматинский экономический колледж (АЭК) – государственное 
                учебное заведение, более 80 лет осуществляющее подготовку 
                квалифицированных кадров по специальностям экономического и 
                технологического профилей, в сферах питания и информационных 
                технологий. Одним из главных достижений деятельности колледжа 
                являются высокие показатели трудоустройства наших 
                выпускников. 
                
                        Мы гарантируем Вам приобретение глубоких знаний и 
                востребованных компетенций, которые определят траекторию 
                Вашего профессионального успеха в будущем!</p>
        </div>
    </div>
    
    <div class="block3">
        <h1 class="heading3">Алматинский экономический колледж это:</h1>
    </div>
    <div class="cards">
        <div class="card1">
            <h2 class="heading1-1">Высокое качество образования</h2>
            <p class="subtitle1">Основанное на международном опыте</p>
            <img class="img1" src="img/IMG_1144 3.png">
            <div class="nums">
                <h1 class="num1">01</h1>
            </div>
        </div>
        <div class="card2">
            <h2 class="heading1-2">Высококвалифициро-ванные преподаватели</h2>
            <p class="subtitle2">Профессиональные практики и эксперты в своих областях</p>
            <img class="img2" src="img/IMG_1141 1.png">
            <div class="nums2">
                <h1 class="num2">02</h1>
            </div>
        </div>
        <div class="card3">
            <h2 class="heading1-3">Актуальный метод
                преподавания</h2>
            <p class="subtitle3">Практические знания и навыки востребованные на рынке</p>
            <img class="img3" src="img/IMG_1142 1.png">
            <div class="nums3">
                <h1 class="num3">03</h1>
            </div>
        </div>
    </div>
    
    <div class="block4">
        <h1 class="heading4">Наши специальности</h1>
    </div>
    <div class="prof-cards">
        <div class="prof-card1">
            <h2 class="heading2-2">3W061301102 -
                Web-дизайнер</h2>
            <p class="subtitle2-2">06130100 - 
                Программное 
                обеспечение</p>
            <img class="circle" src="img/Group 18.svg" />
            <img class="img2-2" src="img/icons8-монитор-100 (3) 1.svg">
        </div>
        <div class="prof-card2">
            <h2 class="heading3-3">3W10130302 - 
                Повар</h2>
            <p class="subtitle3-3">10130300 - 
                Организация питания</p>
            <img class="circle" src="img/Group 18.svg" />
            <img class="img2-2" src="img/icons8-колпак-шеф-повара-100 (2) 1.svg">
        </div>
    </div>
    <div class="prof-cards2">
        <div class="prof-card3">
            <h2 class="heading4-4">4S120100 - Менеджер<br> по банковским операциям</h2>
            <p class="subtitle4-4">4120100 -  Банковское и страховое дело</p>
            <img class="circle" src="img/Group 18.svg" />
            <img class="img2-2" src="img/icons8-банк-100 (1) 1.svg">
        </div>
        <div class="prof-card4">
            <h2 class="heading5-5">04110100 -<br>
                Учет и аудит</h2>
            <p class="subtitle5-5">4S04110102 -
                Бухгалтер</p>
            <img class="circle" src="img/Group 18.svg" />
            <img class="img2-2" src="img/icons8-бухгалтерский-учет-64 1.svg">
        </div>
    </div>
    <div class="prof-cards3">
        <div class="prof-card5">
            <h2 class="heading6-6">3W07210602 -
                Оператор по производству пива </h2>
            <p class="subtitle6-6">07210600 -  Производство пива, безалкогольных и спиртных напитков</p>
            <img class="circle" src="img/Group 18.svg" />
            <img class="img2-2" src="img/icons8-пиво-100 (2) 1.svg">
        </div>
        <div class="prof-card6">
            <h2 class="heading7-7">3W07210302 -
                Кондитер</h2>
            <p class="subtitle7-7">07210300 -<br>
                Хлебопекарное, <br>
                макаронное и <br>
                кондитерское производство</p>
            <img class="circle" src="img/Group 18.svg" />
            <img class="img2-2" src="img/icons8-хлеб-и-рожь-100 (1) 1.svg">
        </div>
    </div>

    <div class="block5">
        <h1 class="heading5">Подать заявку</h1>
        <form method="post" action="signup.php">
            
            <label for="name" class="name-label"></label>
            <input type="text" id="name" name="name" class="name-input" placeholder="Имя:" require><br>
        
            <label for="surname" class="surname-label"></label>
            <input type="text" id="surname" name="surname" class="surname-input" placeholder="Фамилия:" require><br>

            <label for="number" class="phone-number-label"></label>
            <input type="text" id="text" name="number" class="phone-number-input" placeholder="Номер телефона:" require><br>

            <label for="email" class="email-label"></label>
            <input type="email" id="email" name="email" class="email-input" placeholder="Электронная почта:" require><br>
            

            <label for="city" class="city-label"></label>
            <input type="text" id="city" name="city" class="city-input" placeholder="Город:" require><br>
            
            <label for="specialization" class="specialization-label"></label>
            <input type="text" id="specialization" name="specialization" class="specialization-input" placeholder="Специальность:" require><br>

            <label for="qualification" class="qualification-label"></label>
            <input type="text" id="qualication" name="qualification" class="qualification-input" placeholder="Квалификация:" require><br>

            <label for="question" class="question"></label>
            <input type="text" id="text" name="question" class="question-input" placeholder="Вопрос:" require><br>
            <button type="submit" class="button2" value="Отправить">Отправить</button>
        </form>
    </div>

    <div class="block6">
        <h1 class="info1">Главная</h1>
        <h1 class="info2">О нас</h1>        
        <h1 class="info3">Абитуриентам</h1>
        <h1 class="info4">О поступлении</h1>
        <h1 class="info5">World Skills</h1>
        <h1 class="info6">Специальности</h1>
        <h1 class="info7">Контакты</h1>
        <h1 class="info8">Документы на поступление</h1>
        <h1 class="info9">Приемная комиссия</h1>
        <h1 class="info10">Адрес</h1>
        <div class="rec">
            <img class="logow" src="img/icons8-whatsapp-100 (1) 1.svg" />
        </div>
        <div class="rec1">
            <img class="logoi" src="img/icons8-instagram-100 (1) 1.svg" />
        </div>    
        <div class="rec2">
            <img class="logoy" src="img/icons8-youtube-play-100 1.svg" />
        </div>  
        <h1 class="heading7">Copyright © 2023 Алматинский экономический колледж</h1>
    </div>
</div>
</body>
</html>