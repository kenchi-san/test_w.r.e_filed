<?php

// var_dump(implode($_POST,'|'));


$file = 'data.txt';
$current = $_POST['nom'] . '|' . $_POST['prenom'] . '|' . $_POST['adresse'] . '|' . $_POST['code_postal'] . '|' . $_POST['ville'] . '|' . $_POST['telephone'] . '|' . $_POST['mobile'] ."\n";

file_put_contents($file, $current, FILE_APPEND | LOCK_EX);


header('Location: index.php');

