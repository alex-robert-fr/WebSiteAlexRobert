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
            <label for="menuVisible" onclick="displayMenu()">
                <div class="menu_burger">
                    <img src="../frontend/svg/burger.svg" alt="Menu burger">
                    <p>menu</p>
                </div>
            </label>
            <input type="checkbox" name="menu" id="menuVisible">

            <nav>
                <ul>
                    <li>
                        <a href="#slogan" onclick="displayMenu(), removeMenu()">Accueil</a>
                    </li>

                    <li>
                        <a href="#presentation" onclick="displayMenu(), removeMenu()">A Propos</a>
                    </li>

                    <li>
                        <a href="#skils" onclick="displaySkills(), removeMenu()">Skills</a>
                    </li>

                    <li>
                        <a href="#project" onclick="displayMenu(), removeMenu()">Projects</a>
                    </li>

                    <li>
                        <a href="#contact" onclick="displayMenu(), removeMenu()">Contact</a>
                    </li>

                </ul>
            </nav>
        
            <!--img slider start-->
            <section class="slider">
                <div class="slides">
                    <input type="radio" name="radio_btn" id="radio1">
                    <input type="radio" name="radio_btn" id="radio2">
                    <input type="radio" name="radio_btn" id="radio3">
                    <div class="slide slogan" id="slogan">
                        <h2>Je suis Alex Robert</h2>
                        <p>Je suis un dev junior qui adore se surpasser !</p>
                    </div>
                    <div class="slide" id="presentation">
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
                    <div class="slide skills" id="skils">
                        <h2>Skills</h2>
                        <div class="skills__block">
                            <div class="html">
                                <p>html5</p>
                                <div class="html__bar"></div>
                            </div>
                            <div class="css">
                                <p>css3</p>
                                <div class="css__bar"></div>
                            </div>
                            <div class="php">
                                <p>php7</p>
                                <div class="php__bar"></div>
                            </div>
                            <div class="sql">
                                <p>sql</p>
                                <div class="sql__bar"></div>
                            </div>
                            <div class="js">
                                <p>js</p>
                                <div class="js__bar"></div>
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

        <section class="project" id="project">
            <h1>Mes projets</h1>
            <div class="cards">
                <aside class="card">
                    <div class="card__header">
                        <div class="card__header__img"></div>
                        <div class="card__header__tickets">
                            <div class="card__header__tickets__php">PHP 7</div>
                            <div class="card__header__tickets__js">JS</div>
                        </div>
                    </div>
                    <div class="card__body">
                        <h2>Titre</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Donec porta nisi at neque sagittis tempor. Morbi
                            ultrices, nunc sed dapibus sollicitudin, mi metus
                            facilisis magna, id lobortis arcu enim quis nisl.
                            Vestibulum maximus pharetra enim. Aliquam erat
                            volutpat.
                        </p>
                    </div>
                </aside>
                <aside class="card">
                    <div class="card__header">
                        <div class="card__header__img"></div>
                        <div class="card__header__tickets">
                            <div class="card__header__tickets__php">PHP 7</div>
                            <div class="card__header__tickets__js">JS</div>
                        </div>
                    </div>
                    <div class="card__body">
                        <h2>Titre</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Donec porta nisi at neque sagittis tempor. Morbi
                            ultrices, nunc sed dapibus sollicitudin, mi metus
                            facilisis magna, id lobortis arcu enim quis nisl.
                            Vestibulum maximus pharetra enim. Aliquam erat
                            volutpat.
                        </p>
                    </div>
                </aside>
                <aside class="card">
                    <div class="card__header">
                        <div class="card__header__img"></div>
                        <div class="card__header__tickets">
                            <div class="card__header__tickets__php">PHP 7</div>
                            <div class="card__header__tickets__js">JS</div>
                        </div>
                    </div>
                    <div class="card__body">
                        <h2>Titre</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Donec porta nisi at neque sagittis tempor. Morbi
                            ultrices, nunc sed dapibus sollicitudin, mi metus
                            facilisis magna, id lobortis arcu enim quis nisl.
                            Vestibulum maximus pharetra enim. Aliquam erat
                            volutpat.
                        </p>
                    </div>
                </aside>
            </div>
        </section>

        <section class="contact" id="contact">
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