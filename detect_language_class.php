<?php
if (!(isset($_SESSION))) session_start();

include "connect.php";
//Vérifier si une langue été mise en
if (isset($_GET['lang'])){
		$_GET['lang'] = $_GET['lang'];
	}elseif (isset($_SESSION['user_language_choice'])){
		$_GET['lang'] = $_SESSION['user_language_choice'];
	}else{
		$_GET['lang'] = $locale->default_language;
}

//Sélection de la langue
$language_choice = isset($_GET['lang']) ? $_GET['lang'] : '';
    switch ($language_choice) {
        case "en":
            $lang = 'en';
            break;
        case "fr":
            $lang = 'fr';
            break;
        case "es":
            $lang = 'es';
            break;
        default:
            $lang = $locale->default_language;
            break;
    }
	if (isset($_GET['lang'])){
	$_SESSION['user_language_choice'] = $_GET['lang'];
}

//La langue des tableaux
$lang_info_h1 = array(
	'en' => 'From Ajax Simple',
	'fr' => 'Frome du Ajax Simple',
	'es' => 'De Ajax Simple',
	);

$lang1 = array(
	'en' => 'Fristname',
	'fr' => 'Prénom',
	'es' => 'Nombre de pila',
);
$lang2 = array(
	'en' => 'Lastname',
	'fr' => 'Nom',
	'es' => 'Apellido',
);
$lang3 = array(
  'en' => 'Job',
  'fr' => 'Emploi',
  'es' => 'Trabajo',
);
$lang4 = array(
  'en' => 'Email address',
  'fr' => 'Adresse e-mail',
  'es' => 'Eamil',
);
$lang5 = array(
  'en' => 'Save',
  'fr' => 'Sauvegarder',
  'es' => 'Salvar',
);
$lang6 = array(
  'en' => 'Entrer email valide',
  'fr' => 'Entrez email valide',
  'es' => 'Introducir email valide',
);
$lang7 = array(
  'en' => 'Enter your job',
  'fr' => 'Entrez votre travail',
  'es' => 'Ingrese su trabajo',
);
$lang8 = array(
  'en' => 'Edit',
  'fr' => 'modifier',
  'es' => 'Editar',
);
$lang9 = array(
  'en' => 'Delete',
  'fr' => 'Supprimer',
  'es' => 'Borrar',
);
$lang10 = array(
  'en' => 'Update Now',
  'fr' => 'Mettre à jour',
  'es' => 'Actualizar ahora',
);
$lang11 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang12 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang13 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang14 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang15 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang16 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang16 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
$lang17 = array(
  'en' => '',
  'fr' => '',
  'es' => '',
);
 ?>
