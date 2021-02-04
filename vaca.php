<?php
session_start();
if (!isset($_SESSION["usuari"])){
    header("location:login.php");
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Benvingut</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
            crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="img/vaca.png" width="30" height="30" class="d-inline-block align-top" alt=""> Adopta una vaca!
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" id="principal" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="socis" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container main-container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail" src="img/vaca7.jpg">
                </div>
                <div class="col-md-4">
                    <h1>Informació de la vaca</h1>
                    <p>Gràcies pel vostre suport, properament tindreu a la vostra disposició tota una
                        sèrie d'eines per aprendre, conèixer i gestionar tot el que fa referència a la
                        vostra nova apadrinada (la vaca)</p>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" stype="margin:0;">
                    <div class="alert alert-primary" role="alert">
                        <a id="logout" href="logout.php">Desconnectar</a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <!-- jQuery first, then Bootstrap JS. -->
        <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>

    </html>