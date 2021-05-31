<main>
    <div class="panel-mobile">
        <div class="edit_project">
            <div class="panels">
                <div class="panel">
                    <div class="panel__header">
                        <h3>Image header</h3>
                    </div>
                    <div class="panel__body img">
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php if ($edit) { ?>
                                <img src="<?= $router->fileUrl('/Src/Views/img/') . $projects->img ?>" alt="">
                            <?php } ?>
                            <div class="fields">
                                <label for="imgHeader" class="img__label">Choose file</label>
                                <input type="file" name="imgHeader" id="imgHeader">
                            </div>
                            <button type="submit" class="btn btn-main" name="editImg">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panels">
                <div class="panel">
                    <div class="panel__header">
                        <h3>Project Info</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post">
                            <div class="fields">
                                <label for="title">Title</label>
                                <?php if ($edit) { ?>
                                    <input type="text" name="title" id="title" placeholder="Title" value="<?= $projects->title ?>">
                                <?php } else { ?>
                                    <input type="text" name="title" id="title" placeholder="Title">
                                <?php } ?>
                            </div>
                            <div class="fields">
                                <label for="description">Description</label>
                                <?php if ($edit) { ?>
                                    <textarea name="description" id="description" placeholder="Description"><?= $projects->description ?></textarea>
                                <?php } else { ?>
                                    <textarea name="description" id="description" placeholder="Description"></textarea>
                                <?php } ?>
                            </div>
                            <label class="labelBtnCheck" for="publish">Publish :
                                <div class="btnCheck">
                                    <?php if ($edit) { ?>
                                        <input type="checkbox" name="publish" id="publish" <?= $status = ($projects->publish) ? 'checked' : '' ?>>
                                    <?php } else { ?>
                                        <input type="checkbox" name="publish" id="publish">
                                    <?php } ?>
                                    <div class="knobs"></div>
                                    <div class="layer"></div>
                                </div>
                            </label>
                            <button type="submit" class="btn btn-main" name="editText">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panels">
                <div class="panel">
                    <div class="panel__header">
                        <h3>Languages</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post">
                            <?php if ($edit) { ?>
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
                            <?php } else { ?>
                                <div class="checkbox">
                                    <input type="checkbox" name="languages[]" value="HTML" id="html-css">
                                    <label for="html-css">HTML/CSS</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="languages[]" value="JS" id="js">
                                    <label for="js">Javascript</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="languages[]" value="JSX" id="jsx">
                                    <label for="jsx">JSX</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="languages[]" value="PHP" id="php">
                                    <label for="php">PHP7/8</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="languages[]" value="SQL" id="sql">
                                    <label for="sql">MySQL</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="languages[]" value="C++" id="cpp">
                                    <label for="cpp">C++</label>
                                </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-main" name="languages-checked">Modifier</button>
                        </form>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel__header">
                        <h3>Status</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post" class="flex">
                            <label class="labelBtnCheck" for="status">Finish :
                                <div class="btnCheck">
                                    <?php if ($edit) { ?>
                                        <input type="checkbox" name="isFinish" id="status" <?= $status = ($projects->status === 'finished') ? 'checked' : '' ?>>
                                    <?php } else { ?>
                                        <input type="checkbox" name="isFinish" id="status">
                                    <?php } ?>
                                    <div class="knobs"></div>
                                    <div class="layer"></div>
                                </div>
                            </label>
                            <button type="submit" class="btn btn-main inline no-margin" name="status">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panels">
                <div class="panel">
                    <div class="panel__header">
                        <h3>Links</h3>
                    </div>
                    <div class="panel__body">
                        <form action="" method="post">
                            <div class="fields">
                                <label for="" class="header">Website</label>
                                <?php if ($edit) { ?>
                                    <input type="text" class="allWidth" name="linkWebsite" value="<?= $projects->website ?>" placeholder="Empty">
                                <?php } else { ?>
                                    <input type="text" class="allWidth" name="linkWebsite" placeholder="Empty">
                                <?php } ?>
                            </div>
                            <div class="fields">
                                <label for="" class="header">Github</label>
                                <?php if ($edit) { ?>
                                    <input type="text" class="allWidth" name="linkGit" value="<?= $projects->github ?>" placeholder="Empty">
                                <?php } else { ?>
                                    <input type="text" class="allWidth" name="linkGit" placeholder="Empty">
                                <?php } ?>
                            </div>
                            <button type="submit" class="btn btn-main" name="links">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>