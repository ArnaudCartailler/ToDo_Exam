<?php

require '../php/mdp.php';

try{

$bdd = new PDO('mysql:host=localhost;dbname=exam_todo;charset=utf8', 'root', $mdp);

}

catch(Exception $e){

      die('Erreur : '.$e->getMessage());
}
