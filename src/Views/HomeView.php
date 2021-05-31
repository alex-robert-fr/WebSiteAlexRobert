<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Robert</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= $router->fileUrl('/Src/Views/css/alex-mobile.css') ?>">
    <link rel="stylesheet" href="<?= $router->fileUrl('/Src/Views/css/alex-ordinateur.css') ?>">
</head>

<body>
    <?php require_once('includes/adminBarSite.php'); ?>
    <!-- HEADER -->
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
                            <div class="js__bar"></div>
                        </div>
                    </div>
                </div>
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            </div>
        </section>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>
    </header>





    <!-- PROJECT -->
    <section class="project">
        <h1>Mes projets</h1>
        <div class="cards">
            <?php
            foreach ($projects->getProjects() as $project) {
                if ($project->publish) { ?>
                    <aside class="card">
                        <div class="card__header">
                            <img class="card__header__img" src="<?= $router->fileUrl('/Src/Views/img/') ?><?= $project->img ?>">
                            <div class="card__header__tickets">
                                <?php
                                foreach (explode(',', $project->languages) as $language) { ?>
                                    <div class="card__header__tickets__<?= strtolower(str_replace('+', 'p', $language)) ?>"><?= $language ?></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="card__body">
                            <h2><?= $project->title ?></h2>
                            <p><?= $project->description ?></p>
                        </div>
                        <div class="btn">
                            <?php
                            if (!empty($project->website)) {
                                if ($project->insite) { ?>
                                    <a class="btn_card btn__website" target="_blank" href="<?= $router->url($project->website) ?>"><?= $project->title ?></a>
                                <?php } else { ?>
                                    <a class="btn_card btn__website" target="_blank" href="<?= $project->website ?>"><?= $project->title ?></a>
                                <?php }
                                ?>
                            <?php }
                            if (!empty($project->github)) { ?>
                                <a class="btn_card btn__github" target="_blank" href="<?= $project->github ?>"><i class="fa fa-github"></i>GitHub</a>
                            <?php }
                            ?>
                        </div>
                    </aside>
            <?php }
            } ?>
        </div>
    </section>





    <!-- FOOTER -->
    <section class="contact" id="contact">
        <h1>Me contacter</h1>
        <form action="#contact" method="post">
            <label for="lastname">Nom
                <input type="text" name="lastname" id="lastname">
                <p class="error"><?= (isset($errorLastname)) ? $errorLastname : '' ?></p>
            </label>

            <label for="name">Prénom
                <input type="text" name="name" id="name">
                <p class="error"><?= (isset($errorName)) ? $errorName : '' ?></p>
            </label>

            <label for="subject">Sujet
                <input type="text" name="subject" id="subject">
                <p class="error"><?= (isset($errorSubject)) ? $errorSubject : '' ?></p>
            </label>

            <label for="email">Email
                <input type="email" name="email" id="email">
            </label>

            <label for="message">Message
                <textarea rows="5" cols="30" name="message" id="message"></textarea>
                <p class="error"><?= (isset($errorMessage)) ? $errorMessage : '' ?></p>
            </label>
            <div class="submit_btn">
                <label for="send">
                    <i class="fa fa-paper-plane"></i>
                    <input type="submit" value="Envoyer" name="sendMailContact" id="send">
                </label>
            </div>
        </form>
    </section>
    <footer>
        <ul>
            <li>
                <i class="fa fa-github"></i>
                <a href="https://github.com/AxDesign">AxDesign</a>
            </li>

            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto: contact.alexrobert04@gmail.com">contact.alexrobert04@gmail.com</a>
            </li>

            <li>
                <i class="fa fa-phone"></i>
                <a href="tel:+33 6 12 82 23 71">06 12 82 23 71</a>
            </li>
        </ul>
    </footer>
</body>

</html>