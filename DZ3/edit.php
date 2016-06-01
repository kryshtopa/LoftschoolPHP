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

                <?php

                $file = "uploads/" . $_GET['name'];

                if (isset($_POST['text']))
                {
                    file_put_contents($file, $_POST['text']);
                }

                $text = file_get_contents($file);

                ?>

                <br>
                <br>

                <h2 class="h2">
                    Редактирование <?php echo $_GET['name']; ?>
                </h2>

                <br>

                <form method="post" action="">
                    <div class="form-group">
                        <textarea name="text" class="form-control" rows="10"><?php echo htmlspecialchars($text) ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </main>
        </div>
    </div>

</div><!-- wrapper -->

</body>
</html>


