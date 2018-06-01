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

//mise des variables dans $_SESSION
if(isset($_POST['gaz'])){
    $_SESSION["gaz"] = $_POST['gaz'];
}

if(isset($_POST['kyoto'])){
    $_SESSION["kyoto"] = $_POST['kyoto'];
}


if(isset($_POST['hkyoto'])){
    $_SESSION["hkyoto"] = $_POST['hkyoto'];
}


if(isset($_POST['gazquantity'])){
    $_SESSION["gazquantity"] = $_POST['gazquantity'];
}

if(isset($_POST['kyotoquantity'])){
    $_SESSION["kyotoquantity"] = $_POST['kyotoquantity'];
}


if(isset($_POST['hkyotoquantity'])){
    $_SESSION["hkyotoquantity"] = $_POST['hkyotoquantity'];
}


function debug($tab){
   
    echo '<div style="color: white; font-weight: bold; padding: 20px; background:#' . rand(111111, 999999) . ' ">';
    
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