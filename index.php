<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jérémy MARIETTE Développeur FULLSTACK">
    <meta name="generator" content="Jérémy MARIETTE">
    <title>Jérémy MARIETTE Portfolio</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mogra">

    <style>
      #success{
            width: 40%;
            height: 10%;
            margin-left: auto;
            margin-right: auto;
            background-color: green;
            border-radius: 10px;
            margin-bottom: 10px;
      }
      #success p{
            color: white;
            text-align: center;
            margin-top: 10px;
      }
</style>
</head>

<body>




    <nav class="navbar navbar-expand-md  fixed-top bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jérémy MARIETTE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        </div>
        <div class="collapse navbar-collapse float-right" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-4 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="#about" style="width:90px;">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#competences">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projets">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="container-fluid hero">

        <span>Bonjour</span>
        <h1>Je suis Jérémy</h1>
        <span>DEVELOPPEUR WEB - FULL STACK</span>


    </div>

    <div class="container-fluid">
        <div class="row">

            <div id="about" class="col-sm-12 col-md-3 col-lg-3">
                <img id="profil" src="./images/photo.png" alt="">
            </div>
            <div id="presentation" class="col-sm-12   col-md-6 offset-md-3  col-lg-6 offset-lg-3 ">
                <p class="questions">Qui suis-je ?</p>
                <h2 id="titre">A PROPOS</h2>
                <p>
                    Développeur web full stack. Je conçois des applications web et mobile. Je travaille quotidiennement avec des langages tels que : HTML, CSS, Javascript et PHP. Vous êtes intéressé) par mon profil ? Contactez-moi via le formulaire en bas de page.
                </p>
                <a href="ressources/jeremy-mariette-cv.pdf"  download>
                    <button id="cv">Voir mon CV</button>
                </a>
            </div>

        </div>
    </div>
    <main class="container">
        <div class="container" id="competences">

            <div class="row">
                <h2>COMPETENCES</h2>
                <div class="col-sm-12 col-md-4 offset-md-2 col-lg-3 offset-lg-2 ">

                    <div class="card-body">
                        <i class="fa fa-code icone "></i>
                        <h2>FRONT-END</h2>

                        <p class=" card-text ">
                           A l'aide des langages HTML,CSS et JS, j’intègre des maquettes au format web. Met en place des formulaires, des systèmes d'appel à l'action et des animations. 
                        </p>

                    </div>

                </div>
                <div class="col-sm-12 col-md-4 offset-md-2 col-lg-3 offset-lg-2 ">

                    <div class="card-body ">
                        <i class="fa fa-database icone "></i>
                        <h2>BACK-END</h2>
                        <p class="card-text ">
                           Je réalise des systèmes de BDD, en partant de l'architecture des données au format MCD, puis les mets en place et réalise des requêtes avec SQl et PHP. 
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 col-md-4 offset-md-2 col-lg-3 offset-lg-2 ">

                    <div class="card-body ">
                        <i class="fa fa-pencil icone "></i>
                        <h2>GRAPHISME</h2>
                        <p class="card-text ">
                            En contact avec le commanditaire, je réalise la charte graphique, un wireframe du site, je réalise également du travail de l'image à l'aide de la solution Affinity Photo et Affinity Design.
                        </p>

                    </div>

                </div>
                <div class="col-sm-12 col-md-4 offset-md-2 col-lg-3 offset-lg-2 ">

                    <div class="card-body ">
                        <i class="fa fa-chart-line icone "></i>
                        <h2>SEO</h2>
                        <p class="card-text ">
                           Dans une démarche de performance du référencement, je respect la sémantique HTML, les balises meta, analyse le site et met en place les optimisations recommandé par les outils tel que GTmetrix. Je fais la recherche des mots clés associé au projet. 
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <div class="container " id="projets">
            <div class="row ">
                <h2 class="titre ">PROJETS</h2>
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <img class="card-img-top " src="ressources/teddy/teddy_bear_size.jpeg.jpg" alt="Card image cap ">
                    <div class="card-body ">
                        <h2>Blender 3D</h2>
                        <p class="card-text ">Modélisation de Teedy Bear en 3D avec le logiciel blender, j'y ai ajouté les textures et couleurs
                            ainsi qu'un décors pour créer une scène sur le thème de noël.</p>
                        <a href="ressources/teddy/teddy_bear.blend" class="btn btn-primary ">Voir le projet</a>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <img class="card-img-top " src="ressources/unity/jeu-unity.png" alt="Card image cap ">
                    <div class="card-body ">
                        <h2>Unity 3D</h2>
                        <p class="card-text ">Mini jeu vidéo, réalisé avec Unity. Vous incarnez un avatar qui doit collecter des diamant avant d'âtre touché par un ennemi. Ce projet comporte un système de déplacement dans un environnement 3D, un système de collisions, un timer et un compteur de points. 
                        </p>
                        <a href="http://jmariette.alwaysdata.net/unity/" target="_blank" class="btn btn-primary ">Voir le projet</a>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <img class="card-img-top " src="ressources/imc.png" alt="Card image cap ">
                    <div class="card-body ">
                        <h2>Application Android</h2>
                        <p class="card-text ">Calculateur d'IMC, réalisé avec le framework IONIC. Ce projet m'a permis de mettre en place un système de manipulation de données (saisie dans le formulaire
                            et calcul) puis rendu des données avec un système de graphique et de local storage.
                        </p>
                        <a href="https://play.google.com/store/apps/details?id=com.imc.starter" target="_blank" class="btn btn-primary ">Voir le projet</a>
                    </div>

                </div>

            </div>
        </div>

        <div class="container ">
            <div class="row ">
                <h2 class="titre ">PROJETS</h2>
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <img class="card-img-top " src="ressources/quizz.png" alt="Card image cap ">
                    <div class="card-body ">
                        <h2>Quizz</h2>
                        <p class="card-text ">Quizz réalisé en HTML, CSS pour la partie mise en page et style. JS le côté vérification des réponses
                            dans un tableau JSON et calcul du score.
                        </p>
                        <a href="http://jmariette.alwaysdata.net/quizz/" target="_blank" class="btn btn-primary ">Voir le projet</a>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <img class="card-img-top " src="ressources/gestion.png" alt="Card image cap ">
                    <div class="card-body ">
                        <h2>Application de gestion</h2>
                        <p class="card-text ">Application de gestion de budget, réalisée en PHP avec une base données et système de requêtes SQL, avec personnalisation du formulaire.
                        </p>
                        <a href="http://jmariette.alwaysdata.net/gestion" target="_blank" class="btn btn-primary ">Voir le projet</a>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <img class="card-img-top " src="images/projet.jpg " alt="Card image cap ">
                    <div class="card-body ">
                        <h2>Application Android</h2>
                        <p class="card-text ">Calculateur d'IMC, réalisé avec le framework IONIC. Ce projet m'a permis de mettre en place un système de manipulation de données (saisie dans le formulaire
                            et calcul) puis rendu des données avec un système de graphique et de local storage.
                        </p>
                        <a href="# " class="btn btn-primary ">Voir le projet</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="container ">

            <div class="row " id="contact">
                <h2 class="titre ">CONTACT</h2>

                <div class="col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 ">


                    <div class=".col-6 col-sm-12 col-md-12 col-lg-12 ">
                        <div id="cercle">
                            <div class="yeux-gauche ">
                            </div>
                            <div class="yeux-droit ">
                            </div>
                            <div class="bouche "></div>
                        </div>
                    </div>
                    <br>
                    <form action="https://jmariette.alwaysdata.net/portfolio/#contact" method="POST">
                        <div class="mb-3 ">
                            
                            <input type="text " class="form-control " name="nom" id="nom" placeholder="Votre nom" required>
                        </div>
                        <div class="mb-3 ">
                            <input type="email " class="form-control " name="email" id="email" aria-describedby="emailHelp" placeholder="Votre email" required>
                        </div>

                        <div class="form-group ">
                           
                            <textarea class="form-control " name="message" id="message " rows="4" placeholder="Votre message" required></textarea>
                        </div>
                        <button type="submit " class="btn-submit ">Envoyer</button>
                    </form>
                </div>

                <script>

                    //Script JS si envoi mail success afficher div success
                </script>

<?php
if(isset($_POST['email'])){
    $email = htmlentities(trim($_POST['email']));
    $to      = 'j-mariette@protonmail.com';
    $subject = htmlentities(trim($_POST['nom']));
    $message = htmlentities(trim($_POST['message']));
    $headers = "From: {$email}" . "\r\n" . 
    "Reply-To: {$_POST['email']}" . "\r\n" .
    'Content-Type: text/html; charset=utf-8'. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo"
    <div id='success'>
    <p>Votre message a été envoyé.</p>
    </div>
    ";
}



?>


            </div>
        </div>



    </main>
    <footer class=" text-center text-lg-start ">
        <!-- Copyright -->
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); ">
            © 2023 Copyright:
            <a class="text-dark " href=" ">Jérémy MARIETTE</a>
            <a href="https://www.linkedin.com/in/j%C3%A9r%C3%A9my-mariette-3aaa20244/ " target="_blank "> <img id="linkedin " src="./images/icons8-linkedin-entouré.svg " alt=" " srcset=" "></a>


        </div>
    </footer>






</body>

</html>