<?php session_start();

//if (isset($_POST['connect'])){ echo $_POST['connect'];}
include "METIER/fonction.php";


if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['mdp'])) {
    $result = inscription($bdd, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['mdp']);

    if ($result == true) {

        $_SESSION['connect'] = 2;
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
} 
}


if (isset($_POST['mail'], $_POST['password'])){

    $result = verification($bdd, $_POST['mail'], $_POST['password']);

    if ($result == true) {
        $_SESSION['connect'] = 1;
        $email = $_POST['mail'];
        $mdp = $_POST['password'];
    }
}
include "header.php";
include 'BDD/user.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boat Finder</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php 
if (isset($isconnect)) { 

    if ($isconnect == true) {

      include 'IHM/site.php';

} else {
    
    include 'IHM/accueil.php'; 
    
}}

include 'footer.php';?>



    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
    </body>

</html>