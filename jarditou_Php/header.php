
<?php
if(file_exists("connexion_bdd.php")){include("connexion_bdd.php");}
?>



<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Jarditou</title>

</head>

<body>
    <div class="container shadow">
        <div class="row ">
            <div class="col-lg-8">
                <img class="img-fluid" src="./img/jarditou_logo.jpg"  width="200" alt="logo jarditou">
            </div>
            <div class="col-lg-4">
                <h1 class="text-center">Tout le jardin</h1>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Jarditou.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste.php">Tableau</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="votre promotion" aria-label="search">
                        <button class="btn btn-outline-success" type="submit">rechercher</button>
                    </form>
                </div>
            </div>

        </nav>
        </header>
        <div class="bandeau p-auto">
            <img class="promo" src="./img/promotion.jpg"  width="100% " alt="">
        </div>