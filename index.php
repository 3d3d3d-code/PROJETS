<?php

// definition de la page courante
// si la page existe et n est pas vide alors  notre variable correspont GET_page ,sinon c est la page d acceuil
if(isset($_GET['page']) AND !empty($_GET['page'])){
    $_page = trim( strtolower($_GET['page'])); //trim enleve les espaces  et strtolower enleve les majuscules EX:'  HOME  '
}else{
    $page ='home';
}
//toutes pages possibles seront dans le dossiers controllers(array contenant toutes les pages)

$allpages = scandir('controllers/'); //va scanner toutes les pages



if (in_array($page.'contact_controller.php',$allpages)){
    include_once 'models/'.$page.'contact_model.php';
    include_once'controllers/'. $page.'contact_controller.php';
    include_once 'views/'.$page.'_view.php';
    //inclusion de la page
}else{
    //retour d'une erreur
    echo 'Erreur 404';
}
