<?php

header('Location: index.php');

require ('connectdb.php');

$name = trim(stripslashes(htmlEntities($_POST['name'], ENT_QUOTES)));
$title = trim(stripslashes(htmlEntities($_POST['title'], ENT_QUOTES)));
$article = trim(stripslashes(htmlEntities($_POST['article'], ENT_QUOTES)));

$query = 'INSERT INTO Article (titre, contenu, auteur) VALUES (:titre, :contenu, :auteur)';
$prep = $pdo->prepare($query);


$prep->bindParam(':titre', $title, PDO::PARAM_STR);
$prep->bindParam(':contenu', $article, PDO::PARAM_STR);
$prep->bindParam(':auteur', $name, PDO::PARAM_STR);
$prep->execute();



