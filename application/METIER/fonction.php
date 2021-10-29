<?php include "./header.php";

/* -------------
    Inscription
 --------------*/



function inscription($bdd, $nom, $prenom, $email, $telephone, $mdp)
{

    $result = $bdd->query("INSERT INTO `user`(`id_user`, `nom`, `prenom`, `email`, `telephone`, `mdp`) VALUES (NULL ,'" . $nom . "','" . $prenom . "','" . $email . "', '" . $telephone . "','" . $mdp . "')");

    if ($result == false) {

        return false;
    } else {

        return true;
    }
}

/* -------------
    Connexion 
--------------*/


function verification($bdd, $email, $mdp)
{

    $Data = $bdd->query("SELECT email, mdp from user where email = '" . $email . "'&& mdp = '" . $mdp . "'");

    if ($Data->rowcount() >= 1) {

        return true;
    } else {

        return false;
    }
}


function selectPrenomUser($bdd, $idUser) 
{
    $data = $bdd->query("SELECT * from user where id_user = '".$idUser."'");
    $tabData = $data->fetch();

    return $tabData['prenom'];


}