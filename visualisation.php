<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/iconf.ico">

    <title>Visualisation des bassins</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="visualisation.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Visualisation <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Historique des bassins</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autre</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Qu'est-ce que OrmeauZen ?</a>
                        <a class="dropdown-item" href="#">Contact</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Connecté en tant que</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Déconnexion</a>
                      </div>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="N° de bassin" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
                  </form>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">

            <strong>OrmeauZen</strong>
          </a>

          <a>
          <img src="images/fra.jpg">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="starter-template">
        <div class="container">
          <h1>Visualisation des bassins</h1>
          <p class="lead text-muted"></p>
          <p class="lead">Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?></p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
           <?php

              for($i=1 ; $i<61 ; $i++){
              echo '
            <div class="col-md-3">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th>
                        <p class="nbassin" align="center"><a href="historique.php?bassin='.$i.'">Bassin n°' .$i. '</a></p>
                      </th>
                      <th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                    </tr>

                    <tr>
                      <td class="valeur" aligne="center">
                        #valeur
                      </td>
                      <td>
                        <p></p>
                      </td>
                      <td class="valeur" align="center">
                        0
                      </td>  
                    </tr>

                    <tr>
                      <td>
                        <p>&nbsp;</p>
                      </td>
                      <td>
                        <p>&nbsp;</p>
                      </td>
                      <td>
                        <p>&nbsp;</p>
                      </td>  
                    </tr>

                    <tr>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">-</button>
                      </td>
                      <td>
                        <p class="card-text">Réglage débit</p>
                      </td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">+</button>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>';
            }
            ?>
           </div> 
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Retour vers le haut de la page</a>
        </p>
        <p>&copy; OrmeauZen 2017-2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap4/dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap4/dist/js/vendor/popper.min.js"></script>
    <script src="bootstrap4/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap4/dist/js/vendor/holder.min.js"></script>
  </body>
</html>
