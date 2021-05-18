<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= str_replace($_GET['url'], '', $_SERVER['REQUEST_URI']) ?>/src/Views/css/admin-ui-elements.css">
    <link rel="stylesheet" href="<?= str_replace($_GET['url'], '', $_SERVER['REQUEST_URI']) ?>/src/Views/css/admin.css">
</head>

<body class="admin">
    <?php require_once('includes/adminNav.php'); ?>
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1><?= $countAllView->getViews() ?></h1>
                    <span>Views</span>
                </div>
                <div>
                    <i class="fas fa-tachometer-alt"></i>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1><?= $projects->numberProjects() ?></h1>
                    <span>Projects</span>
                </div>
                <div>
                    <i class="fas fa-tasks"></i>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>124</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <i class="fas fa-tachometer-alt"></i>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>$6k</h1>
                    <span>Income</span>
                </div>
                <div>
                    <i class="fas fa-tachometer-alt"></i>
                </div>
            </div>
        </div>

        <div class="recent-grid">
            <div class="projects">
                <div class="panel card">
                    <div class="panel__header card__header">
                        <h3>Recent Projects</h3>

                        <button class="btn btn-main"><a href="<?=$router->url('projects')?>"> See all <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                    <div class="card__body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Project Title</td>
                                        <td>Languages</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($projects->getProjects() as $project) { ?>
                                        <tr>
                                            <td><a href="#"><?= $project->title ?></a></td>
                                            <td><a href="#"><?= $project->languages ?></a></td>
                                            <td>
                                                <a href="#">
                                                    <span class="status purple"></span>
                                                    <?= $project->status ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customers">
                <div class="panel card">
                    <div class="panel__header card__header">
                        <h3>New customer</h3>

                        <button class="btn btn-main"><a href="#">See all <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                    <div class="card__body">
                        <div class="customer">
                            <div class="info">
                                <img src="<?= str_replace('/admin/dashboard', '', $_SERVER['REQUEST_URI']) ?>/src/Views/img/marc.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <i class="far fa-user-circle"></i>
                                <i class="far fa-comment-alt"></i>
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?= str_replace('/admin/dashboard', '', $_SERVER['REQUEST_URI']) ?>/src/Views/img/marc.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <i class="far fa-user-circle"></i>
                                <i class="far fa-comment-alt"></i>
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?= str_replace('/admin/dashboard', '', $_SERVER['REQUEST_URI']) ?>/src/Views/img/marc.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <i class="far fa-user-circle"></i>
                                <i class="far fa-comment-alt"></i>
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?= str_replace('/admin/dashboard', '', $_SERVER['REQUEST_URI']) ?>/src/Views/img/marc.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <i class="far fa-user-circle"></i>
                                <i class="far fa-comment-alt"></i>
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?= str_replace('/admin/dashboard', '', $_SERVER['REQUEST_URI']) ?>/src/Views/img/marc.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <i class="far fa-user-circle"></i>
                                <i class="far fa-comment-alt"></i>
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?= str_replace('/admin/dashboard', '', $_SERVER['REQUEST_URI']) ?>/src/Views/img/marc.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <i class="far fa-user-circle"></i>
                                <i class="far fa-comment-alt"></i>
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
</body>

</html>