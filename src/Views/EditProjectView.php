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
        <div class="panel-mobile">
            <div class="edit_project">
                <div class="panel">
                    <div class="panel__header">
                        <h3>Image header</h3>
                    </div>
                    <div class="panel__body img">
                        <form action="" method="post" enctype="multipart/form-data">
                            <img src="<?= $router->fileUrl('/Src/Views/img/') . $projects->img ?>" alt="">
                            <div class="fields">
                                <label for="imgHeader" class="img__label">Choose file</label>
                                <input type="file" name="imgHeader" id="imgHeader">
                            </div>
                            <button type="submit" class="btn btn-main" name="editImg">Modifier</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel__header">
                        <h3>Project Info</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post">
                            <div class="fields">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" placeholder="Title" value="<?= $projects->title ?>">
                            </div>
                            <div class="fields">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" placeholder="Description"><?= $projects->description ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-main" name="editText">Modifier</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel__header">
                        <h3>Languages</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post">
                            <div class="checkbox">
                                <input type="checkbox" name="languages[]" value="HTML" id="html-css" <?= $checked = (in_array("HTML", $languages)) ? 'checked' : '' ?>>
                                <label for="html-css">HTML/CSS</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="languages[]" value="JS" id="js" <?= $checked = (in_array("JS", $languages)) ? 'checked' : '' ?>>
                                <label for="js">Javascript</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="languages[]" value="JSX" id="jsx" <?= $checked = (in_array("JSX", $languages)) ? 'checked' : '' ?>>
                                <label for="jsx">JSX</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="languages[]" value="PHP" id="php" <?= $checked = (in_array("PHP", $languages)) ? 'checked' : '' ?>>
                                <label for="php">PHP7/8</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="languages[]" value="SQL" id="sql" <?= $checked = (in_array("SQL", $languages)) ? 'checked' : '' ?>>
                                <label for="sql">MySQL</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="languages[]" value="C++" id="cpp" <?= $checked = (in_array("C++", $languages)) ? 'checked' : '' ?>>
                                <label for="cpp">C++</label>
                            </div>
                            <button type="submit" class="btn btn-main" name="languages-checked">Modifier</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel__header">
                        <h3>Links</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post">
                            <button type="submit" class="btn btn-main">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
</body>

</html>