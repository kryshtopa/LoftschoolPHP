<!doctype html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8">
    <title>DZ 3</title>
    <meta content="viewport" width="1000"/>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="wrapper">

    <nav class="navbar navbar-inverse">
        <div class="container">
            <a href="index.php" role="button" class="btn btn-danger navbar-btn navbar-left nav__btn">HOME</a>
            <a href="new.php" role="button" class="btn btn-info navbar-btn navbar-right nav__btn">New file</a>
            <a href="upload.php" role="button" class="btn btn-success navbar-btn navbar-right nav__btn">Upload</a>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container">

            <main class="content col-md-8 col-md-offset-2">

                <br>
                <br>

                <h2 class="h2">
                    Просмотр <?php echo $_GET['name']; ?>
                </h2>

                <br>

                <div class="text-wrap">

                    <?php

                    $file = "uploads/" . $_GET['name'];
                    $fileOpen = fopen($file, 'r');
                    $pageText = fread($fileOpen, 25000);

                    echo nl2br($pageText);
        
                    ?>
                </div>

                <br>
                <br>
                <br>

            </main>
        </div>
    </div>

</div><!-- wrapper -->

</body>
</html>


