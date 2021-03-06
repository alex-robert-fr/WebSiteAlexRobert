<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= $router->fileUrl('/Src/Views/css/admin.css') ?>">
    <link rel="stylesheet" href="<?= $router->fileUrl('/Src/Views/css/admin-ui-elements.css') ?>">
</head>

<body class="admin">
    <?php require_once('includes/adminNav.php'); ?>
    <main>
        <div class="panel">
            <div class="mobile">
                <form action="" method="post">
                    <div class="panel__header">
                        <h3>My currents projects</h3>
                        <button class="btn btn-main"><a href="<?= $router->url('addProject') ?>">Add project <i class="fas fa-plus"></i></a></button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Project Name</td>
                                <td>Start Date</td>
                                <td>Last modification</td>
                                <td>Languages</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($projects->getProjects() as $project) {
                                $url = $router->url('editProject', ['id' => $project->id]);
                            ?>
                                <tr>
                                    <td><a href="<?= $url ?>"><input type="checkbox" name="edit[]" value="<?=$project->id?>"></a></td>
                                    <td data-title="Project Name"><a href="<?= $url ?>"><?= $project->title ?> <span class="error italic"><?= $draft = ($project->publish) ? '' : '[ Draft ]' ?></span></td></a>
                                    <td data-title="Start Date"><a href="<?= $url ?>">06 Sep 2020</td></a>
                                    <td data-title="Last Modification"><a href="<?= $url ?>"><?= $project->lastModified ?></td></a>
                                    <td data-title="Languages"><a href="<?= $url ?>"><?= $project->languages ?></td></a>
                                    <td data-title="Status"><a href="<?= $url ?>">
                                            <span class="status <?= $status = ($project->status === 'finished') ? 'desactive' : 'active' ?>"></span>
                                            <?= $project->status ?>
                                    </td></a>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                    <div class="panel__footer">
                        <button class="btn btn-danger no-margin" type="submit" name="editProjects">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    </div>
</body>

</html>