<?php
// fichier config/core.php

// traitement du formulaire contact avec ajout à la bdd
if(isset($_POST['contact'])){
    // supprime les espaces avant et après
    $_POST = array_map('trim', $_POST);
    // vérification si vide
    if(empty($_POST['mail']) || empty($_POST['message'])){
		//message erreur si vide
		flash_in('error', 'L\'email et le message sont obligatoires');
    // redirection
		header('Location: contact.php');
		exit();
	}
  // rajout de la valeur null si vide
  if(empty($_POST['name']))
		$_POST['name'] = null;
	if(empty($_POST['firstName']))
		$_POST['firstName'] = null;

  // insertion à la bdd sql
  $insert = $sql -> prepare ('INSERT INTO questions (name, first_name, mail, message) VALUES (:n, :f, :m, :sum)');
  $insert -> execute([
    ':n' => $_POST['name'],
    ':f' => $_POST['firstName'],
    ':m' => $_POST['mail'],
    ':sum' => $_POST['message']
    ]);
  flash_in('success', 'Le message a bien été envoyé');
  // redirection
  header('Location: contact.php');
	exit();
}



// traitement du formulaire pour compteur de like
if(isset($_GET['lik'])){
  // selection de la ligne avec l'article grâce à l'id renvoyé dans l'url
  $articles = $sql -> prepare('SELECT * FROM articles WHERE id='.$_GET['lik']);
  $articles -> execute ();
  //on lit les resultats sous forme de tableau
  $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
  // creation d'une variable à renvoyer
  $x=0;
  foreach($articles as $i ){
    // la variable récupère le nombre de like actuel
    $x = $i['cool'];
    // ajout de 1
    $x++;
    // update du nombre de like à l'article selectionné grâce à la variable
    $lik = $sql -> prepare ('UPDATE articles  SET cool = :c  WHERE id='. $_GET['lik']);
    $lik -> execute([
      ':c' => $x,
    ]);
  };
  // redirection
  header('Location: blog.php');
  exit();
};

// traitement du formulaire pour compteur de dislike
if(isset($_GET['dislike'])){
  // même chose que pour le nombre de like mais avec la colonne et le button dislike
  $articles = $sql -> prepare('SELECT * FROM articles WHERE id='.$_GET['dislike']);
  $x=0;

  $articles -> execute ();
  //on lit les resultats sous forme de tableau
  $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
  foreach($articles as $i ){
    $x = $i['dislike'];
    $x++;
    var_dump($i['id']);
    var_dump($x);
    $lik = $sql -> prepare ('UPDATE articles  SET dislike = :c  WHERE id='. $_GET['dislike']);
    $lik -> execute([
      ':c' => $x,
    ]);
  };
  header('Location: blog.php');
  exit();
};

// traitement du formulaire newsletters
if(isset($_POST['news'])){
  // enleve les espaces avant et après
  $_POST = array_map('trim', $_POST);
  // vérification si non vide
  if(empty($_POST['newsletters'])){
    //message erreur title vide
    flash_in('error', 'L\'email est obligatoires');
    // redirection
    header('Location: .');
    exit();
  } 
  // ajout de la valeur du input à la table newsletters dans la bdd de la valeur insérée
  $insert = $sql -> prepare ('INSERT INTO newsletters (mail) VALUES (:m)');
  $insert -> execute ([
    ':m' => $_POST['newsletters'],
  ]);
  flash_in('success', 'Vous vous êtes bien inscrit à la newsletter');
  // redirection
  header('Location: .');
  exit();
}