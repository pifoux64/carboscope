<?php

// Session
 session_start();

 // connexion à la BDD

 $pdo = new PDO('mysql:host=localhost;dbname=carboscope', 'root', 'root', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
));

// variables:
$msg = '';
$page ='';
$meta_description = '';
$contenu= '';

//augmentation champs formulaire bdd
ini_set('php_value max_input_vars',3000);


if(isset($_POST["prenom"])){
    $_SESSION["prenom"] = $_POST["prenom"];
}

if(isset($_POST["nom"])){
    $_SESSION["nom"] = $_POST["nom"];
}

if(isset($_POST["courriel"])){
    $_SESSION["courriel"] = $_POST["courriel"];
}

if(isset($_POST["phone"])){
    $_SESSION["phone"] = $_POST["phone"];
}

if(isset($_POST["position"])){
    $_SESSION["position"] = $_POST["position"];
}

if(isset($_POST["adresse"])){
    $_SESSION["adresse"] = $_POST["adresse"];
}

if(isset($_POST["adresse2"])){
    $_SESSION["adresse2"] = $_POST["adresse2"];
}

if(isset($_POST["ville"])){
    $_SESSION["ville"] = $_POST["ville"];
}

if(isset($_POST["province"])){
    $_SESSION["province"] = $_POST["province"];
}

if(isset($_POST["codepostal"])){
    $_SESSION["codepostal"] = $_POST["codepostal"];
}

if(isset($_POST["companyname"])){
    $_SESSION["companyname"] = $_POST["companyname"];
}

if(isset($_POST["companyca"])){
    $_SESSION["companyca"] = $_POST["companyca"];
}

if(isset($_POST["companybenefices"])){
    $_SESSION["companybenefices"] = $_POST["companybenefices"];
}

if(isset($_POST["equite"])){
    $_SESSION["equite"] = $_POST["equite"];
}

if(isset($_POST["dette"])){
    $_SESSION["dette"] = $_POST["dette"];
}

if(isset($_POST["companyemployes"])){
    $_SESSION["companyemployes"] = $_POST["companyemployes"];
}

if(isset($_POST["secteur"])){
    $_SESSION["secteur"] = $_POST["secteur"];
}

$i = 10;
for ($i=10; $i<93; $i++) {
    if(isset($_POST["soussecteur" . "$i"]))
    {
        $_SESSION["soussecteur" . "$i"] = $_POST["soussecteur" . "$i"];
        if($_POST["soussecteur" . "$i"] != "Choisir..."){
             $_SESSION["soussecteur"] = $_POST["soussecteur" . "$i"];
        }
    }
}



if(isset($_POST["plusieursbatiments"])){
    $_SESSION["plusieursbatiments"] = $_POST["plusieursbatiments"];
    $j = $_SESSION["plusieursbatiments"];
}

for ($j=1; $j<$_SESSION["plusieursbatiments"]; $j++) {
    
            if(isset($_POST["batiment" . "$j" . "utilisation"])){
                $_SESSION["batiment" . "$j" . "utilisation"] = $_POST["batiment" . "$j" . "utilisation"];
            }

            if(isset($_POST["batiment".$j."ville"])){
                $_SESSION["batiment".$j."ville"] = $_POST["batiment".$j."ville"];
            }

            if(isset($_POST["nbbatiment"])){
                $_SESSION["nbbatiment"] = $_POST["nbbatiment"];
            }
            else{
                $nbbatiment = 1 ;
            }

            if(isset($_POST["batiment".$j."proprietaire"])){
                $_SESSION["batiment".$j."proprietaire"] = $_POST["batiment".$j."proprietaire"];
            }

            if(isset($_POST["batiment".$j."superficie"])){
                $_SESSION["batiment".$j."superficie"] = $_POST["batiment".$j."superficie"];
            }

            if(isset($_POST["batiment".$j."connaitsup"])){
                $_SESSION["batiment".$j."connaitsup"] = $_POST["batiment".$j."connaitsup"];
            }

            if(isset($_POST["batiment".$j."cp"])){
                $_SESSION["batiment".$j."cp"] = $_POST["batiment".$j."cp"];
            }
}


if(isset($_POST["gaz"])){
    $_SESSION["gaz"] = $_POST["gaz"];
}

if(isset($_POST["kyoto"])){
    $_SESSION["kyoto"] = $_POST["kyoto"];
}


if(isset($_POST["hkyoto"])){
    $_SESSION["hkyoto"] = $_POST["hkyoto"];
}


if(isset($_POST["gazquantity"])){
    $_SESSION["gazquantity"] = $_POST["gazquantity"];
}

if(isset($_POST["kyotoquantity"])){
    $_SESSION["kyotoquantity"] = $_POST["kyotoquantity"];
}


if(isset($_POST["hkyotoquantity"])){
    $_SESSION["hkyotoquantity"] = $_POST["hkyotoquantity"];
}


function debug($tab){
   
    echo '<div style="color: white; font-weight: bold; padding: 20px; background: grey">';
    
    $trace = debug_backtrace(); // debug_backtrace(), nous permet de récupérer plusieurs infos sur l'endroit où une fonction est appelée (exécutée).
    
    echo 'Le debug a été demandé dans le fichier ' . $trace[0]['file'] . ' à la ligne ' . $trace[0]['line'] . '<hr/>';
    
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
    
    echo '</div>'; 
 }

 function myFunction() {
    document.getElementById("msform").submit();
} 

// chemins: 

define('RACINE_SITE', '/carboscope');
// Creation du chemin du site à partir de htdocs

define('RACINE_SERVEUR', $_SERVER['DOCUMENT_ROOT']);
//création du chemin du serveur grâce à la superglobale $_SERVER


// autres inclusions

//require_once('fonctions.inc.php');

?>