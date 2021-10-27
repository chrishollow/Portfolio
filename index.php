<?php


//require_once "config.php"; // configuration
        // si on a un fichier de fonctions on le charge ici

// si on a besoin de se connecter à une base de donnée, on se connecte ici!

// Routeur
if(!isset($_GET['pg'])){

    include_once "pages/homepage.php";

}else{

    switch($_GET['pg']){
        case "cv":  
            include_once "pages/curriculum.php";

            break;
        case "tuto":
            include_once "pages/tutoriels.php";

            break;
        case "galerie":  
            include_once "pages/galerie.php";

            break;
        case "contacts":
            include_once "pages/contacts.php";

            break;
        case "liens":  
            include_once "pages/liens.php";

            break;
             default:    
            // chargement de l'accueil
            include_once "import/homepage.php";
        }
 
}