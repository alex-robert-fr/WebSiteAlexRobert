<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Robert</title>
    <link rel="stylesheet" href="../frontend/css/mobile.css">
    <link rel="stylesheet" href="../frontend/css/ordinateur.css">
    <script defer src="js/script.js"></script>
</head>

<body>
    <header>
        <section class="slider">
            <div class="slides">
                <input type="radio" name="radio_btn" id="radio1">
                <input type="radio" name="radio_btn" id="radio2">
                <input type="radio" name="radio_btn" id="radio3">
                <div class="slide slogan">
                    <h2>Je suis Alex Robert</h2>
                    <p>Je suis un dev junior qui adore se surpasser !</p>
                </div>
                <div class="slide">
                    <div class="presentation">
                        <h2>Alex Robert</h2>
                        <p>Salut !</br>
                            Moi c’est Alex, j’ai 19 ans et je suis passionné de
                            code ! Plus précisément de langages web comme le PHP
                            ou le Javascript.Je suis encore un dev junior mais
                            je compte bien progresser et me surpasser pour
                            passer au stade supérieur !</br></br>

                            Je suis quelqu’un de passionné, de déterminé et je
                            n’hésite pas à passer des nuits entières à résoudre
                            les problèmes liés à mes programmes. À savoir que je
                            suis tout aussi passionné par l’apprentissage en
                            lui-même et qu’apprendre de nouveaux langages /
                            technologies est loin de me rebuter.</br></br>

                            N’hésitez pas à aller faire un tour dans mes projets
                            récents (ils risquent de vite s’agrandir).
                        </p>
                    </div>
                </div>
                <div class="slide skills">
                    <h2>Skills</h2>
                    <div class="skills__block">
                        <div data-tooltip="96%" class="html">
                            <p>html5</p>
                            <div class="html__bar"></div>
                        </div>
                        <div data-tooltip="92%" class="css">
                            <p>css3</p>
                            <div class="css__bar"></div>
                        </div>
                        <div data-tooltip="55%" class="php">
                            <p>php7</p>
                            <div class="php__bar"></div>
                        </div>
                        <div data-tooltip="53%" class="sql">
                            <p>sql</p>
                            <div class="sql__bar"></div>
                        </div>
                        <div data-tooltip="30%" class="js">
                            <p>js</p>
                            <div  class="js__bar"></div>
                        </div>
                    </div>
                </div>
                <!-- slide img end-->
                <!-- automatic nav start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            </div>
            <!-- automatic nav end-->
            <!-- </div> -->

            <!-- manual nav start-->
            <!-- manual nav end-->


            <!-- <div class="arrow"></div> -->
        </section>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>
    </header>

    <section class="project">
        <h1>Mes projets</h1>
        <div class="cards">
            <aside class="card">
                    <div class="card__header">
                        <a class="card__header__logo_git" href="https://github.com/AxDesign/MuscuPlus">
                            <img src="./frontend/img/logo_github.png">
                        </a>
                        <a href="http://muscuplus.alexrobert.fr/">
                            <img class="card__header__img" src="./frontend/img/img_muscuplus.jpg">
                        </a>
                        <div class="card__header__tickets">
                            <div class="card__header__tickets__php">PHP 7</div>
                            <div class="card__header__tickets__js">JS</div>
                        </div>
                    </div>
                    <div class="card__body">
                        <h2>MuscuPlus</h2>
                        <p>
                            Voici Muscuplus,</br>
                            Mon premier gros projet d'application web.</br>
                            Le but de celle-ci étant d'avoir un suivie de ses activitées sportives.
                            Ce projet me plaît énormément et c'est pour ca que je suis en train de 
                            développer une nouvelle version en ce moment.
                        </p>
                    </div>
            </aside>
            <aside class="card">
                <div class="card__header">
                    <a class="card__header__logo_git" href="https://github.com/AxDesign/AutoMarque">
                        <img src="./frontend/img/logo_github.png">
                    </a>
                    <img class="card__header__img" src="./frontend/img/img_premierepro.png">
                    <div class="card__header__tickets">
                        <div class="card__header__tickets__js">JS</div>
                        <div class="card__header__tickets__jsx">JSX</div>
                    </div>
                </div>
                <div class="card__body">
                    <h2>AutoMarque</h2>
                    <p>
                        AutoMarque est une extention pour Première Pro.</br>
                        Celle-ci permet de rentrer un texte composé d'un temps et d'une description 
                        et de placer les marqueurs voulus automatiquement aux endroits indiqués.
                        J'imagine beaucoup d'amélioration possible afin de pouvoir automatiser certaines parties des montages vidéos.
                    </p>
                </div>
            </aside>
            <aside class="card">
                <div class="card__header">
                <a class="card__header__logo_git" href="https://github.com/AxDesign/Passfilter">
                    <img src="./frontend/img/logo_github.png">
                </a>
                <img class="card__header__img" src="./frontend/img/img_passfilter.jpg">
                    <div class="card__header__tickets">
                        <div class="card__header__tickets__cpp">C++</div>
                    </div>
                </div>
                <div class="card__body">
                    <h2>PassFilter</h2>
                    <p>
                        PassFilter est un système de filtrage de mot de passe sous Windows.
                        Cela permet de définir une liste de mots interdits dans le mot de passe, ceci même si le 
                        langage geek est utilisé. 
                    </p>
                </div>
            </aside>
        </div>
    </section>

    <section class="contact">
        <h1>Me contacter</h1>
        <form action="index.php" method="post">
            <label for="lastname">Nom
                <input type="text" name="lastname" id="lastname">
            </label>

            <label for="name">Prénom
                <input type="text" name="name" id="name">
            </label>

            <label for="subject">Sujet
                <input type="text" name="subject" id="subject">
            </label>

            <label for="email">Email
                <input type="email" name="email" id="email">
            </label>

            <label for="message">Message
                <textarea rows="5" cols="30" name="message" id="message"></textarea>
            </label>
            <button type="submit" name="send">Envoyer</button>
        </form>
    </section>
</body>

</html>