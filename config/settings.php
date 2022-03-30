<?php
//fichier config/settings.php


//on demarre la session
session_start();

//si la case des messages n'existe pas dans la mémoire, on la crée
if(empty($_SESSION['message']))
	$_SESSION['message'] = [];


/*****************
 * connexion à la base
 ****************/
//on parametre les constantes de connexion
define('SQL_HOST', 'localhost');
define('SQL_USER', 'root');
define('SQL_PASS', '');
define('SQL_NAME', 'b1_simhati');

//on essaie de se connecter à la base
try{
	$sql = new PDO('mysql:dbname='.SQL_NAME.';charset=utf8;host='.SQL_HOST , SQL_USER, SQL_PASS);

//si ça plante, on arrete l'execution de la page et on affiche le message d'erreur
}catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}


//on charge le fichier qui contient toutes nos fonctions
include('functions.php');

//on charge le traitement des forms
include('core.php');