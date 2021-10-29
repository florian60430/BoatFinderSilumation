<?php 
session_start();
include '../header.php';
// On vérifie si l'utilisateur à au moins 1 coordonnée dans sa bdd
$dataNumberOfRow = $bdd->query("SELECT * FROM coordonne WHERE id_user = ".$_SESSION['id_user']."");
if ($dataNumberOfRow->rowcount() < 1) {

include 'errorpage.php';

} else {

$DatabrutIdMax = $bdd->query("SELECT MAX(id_co) FROM coordonne WHERE id_user = ".$_SESSION['id_user']."");

$TabDataBrutIdMax = $DatabrutIdMax->fetch();

$Databrut = $bdd->query("SELECT * FROM coordonne WHERE id_co=".$TabDataBrutIdMax[0]."");
$TabData = $Databrut->fetch();
$latitude = $TabData['latitude'];
$longitude = $TabData['longitude'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boat Finder</title>

    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
        #mapid {
            height: 800px;

        }
    </style>
</head>

<body>
    <nav id="map-nav" class="navbar navbar-fixed-top navbar-custom navbar-solid">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li><a data-scroll href="../index.php">Accueil</a></li>
                    <li class="active"><a href="map.php">Map</a></li>
                     <!-- <li><a data-scroll href="#schedule">Mon Compte</a></li> -->
                    <li><a href="../METIER/deconnexion.php">Deconnexion</a></li>
                    <!-- TODO faire un bouton de deconnexion -->

                </ul>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <div id="mapid"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


<?Php 
       echo"
	<script>
		var mymap = L.map('mapid').setView([".$latitude.", ".$longitude."], 30);
</script>"?>

<script>
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZmxvcmlhbjYwNDMwIiwiYSI6ImNrZnR5MWVnbTFwaHMyeXBhNjNheXVtaDcifQ.7fXTFqegFokyrMP_HO7Gkw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
    </script>
    <?php
    echo "
<script>
var marqueur = L.marker([" . $latitude . ", " . $longitude . "]).addTo(mymap);

	</script>
"; ?>
    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
<?php include '../footer.php'; }?>

</html>