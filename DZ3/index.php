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
            <a href="upload.php" role="button" class="btn btn-info navbar-btn navbar-right nav__btn">Upload</a>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container">

            <main class="content col-md-8 col-md-offset-2">

                <br>
                <br>

                <h2 class="h2">
                    Список файлов
                </h2>

                <br>

                <table class="table table-hover">
                    <tbody>

                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "DZ3";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, name FROM upload";
                    $result = $conn->query($sql);
                    $i = 1;

                    while($row = $result->fetch_assoc()) {
                    ?>

                        <tr>
                            <td class="align-center">
                                <?php echo $i++ ?>
                            </td>
                            <td class="align-left">
                                <a href="view.php?name=<?php echo $row['name'] ?>"><?php echo $row['name'] ?></a>
                            </td>
                            <td class="align-center">
                                <a href="edit.php?name=<?php echo $row['name'] ?>" class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                            </td>
                            <td class="align-center">
                                <a href="download.php?name=<?php echo $row['name'] ?>" class="glyphicon glyphicon-download" aria-hidden="true"></a>
                            </td>
                            <td class="align-center">
                                <a href="delete.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name'] ?>" class="glyphicon glyphicon-remove" aria-hidden="true"></a>
                            </td>
                        </tr>

                        <?php
                    }
                    $conn->close();
                    ?>

                    </tbody>
                </table>

            </main>
        </div>
    </div>

</div><!-- wrapper -->

</body>
</html>