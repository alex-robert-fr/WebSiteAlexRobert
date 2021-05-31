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
    <?php require_once('includes/projectsEdit.php'); ?>
</body>

</html>