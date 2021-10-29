<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boat Finder</title>

    <!-- css -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body data-spy="scroll" data-target="#site-nav">
    <header id="site-header" class="site-header valign-center">
        <div class="intro">

            <h2>Bienvenue sur</h2>

            <h1>GEO BOAT FINDER</h1>

            <p>Nous sommes heureux d'aider de jeunes marins à se repérer en mer</p>

            <a class="btn btn-white" data-scroll href="#registration">Inscrivez-vous</a>
        </div>
    </header>

    <!-- LOGIN FORM -->
    <section id="login" class="section login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Formulaire de connexion</h3>
                </div>
            </div>
            <form action="" method="POST">
                <?php if(isset($result)) {
                    if ($result == false){
                        echo "<div class='error'> email ou mot de passe incorrect </div>";
                    }
                } ?>
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="mail" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mot de passe" id="mdp" name="password" required>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20 margin-login">
                    <input type="submit" class="btn btn-black login" id="registration-submit-btn" name="btnLogin" value="Connexion">
                </div>
            </form>
        </div>
    </section>

    <!-- REGISTER FORM -->
    <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Formulaire d'inscription</h3>
                </div>
            </div>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Prénom" id="prenom" name="prenom" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Téléphone" id="telephone" name="telephone" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mot de passe" id="mdp" name="mdp" required>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20">
                    <input type="submit" class="btn btn-black" id="registration-submit-btn" name="btnSubmit" value="envoyer"> <a data-scroll href="#login"> Déja inscrit ? </a>
                </div>
            </form>
        </div>
    </section>
    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>