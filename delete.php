<?php
$file = 'data.txt';
$id= $_GET['id'];
$data = file($file);
if(!isset($data[$id])) {
    header('Location: index.php');
    die();
}

$newData = "";
for ($i = 0; $i < count($data); ++$i) {
    if ($i == $id) {
        continue;
    }
    $newData .= $data[$i];
}
file_put_contents($file,$newData);
header('Location: index.php');
