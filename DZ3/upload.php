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
                        Загрузите текстовый файл размером не более 2 Мб
                    </h2>

                    <br>

                    <form method="post" enctype="multipart/form-data" action="upload-to-database.php">
                        <div class="form-group">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input name="userfile" type="file" id="userfile">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </main>
            </div>
        </div>
    
    </div><!-- wrapper -->

</body>
</html>
