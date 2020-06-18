<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/vaca.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Adopta una vaca!
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="adopta.php" role="login">
          <img src="img/vaca-login.png" id="imatge" class="img-responsive" alt="" />

          <input type="text" id="vaca" name="vaca" placeholder="Nom de la vaca" required class="form-control input-lg" />
          <input type="password" id="contrasenya" class="form-control input-lg" name="password" placeholder="Contrasenya" required="" />
          <div class="pwstrength_viewport_progress"></div>

          <button type="submit" id="entrar" name="go" class="btn btn-lg btn-primary btn-block">
              Entrar
            </button>
          <div>
            <a href="notnow.html">Vull adoptar</a>
          </div>
        </form>
        <?php
                $error=$_GET['error'];
                if (isset($error)) {
                ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> Vaca inexistent o contrasenya incorrecta
            </div>
        <?php
                }
        ?>
      </section>
      </div>
      <div class="col-md-4"></div>
  </div>
</div>
  <!-- jQuery first, then Bootstrap JS. -->
  <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
