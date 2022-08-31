<?php
require_once("Core/Router.php"); // Appel Le fichier Router.php qui detient une classe Router avec le namspace Core
use Core\Router; //Appel le fichier router.php qui detient une classe Router avec le namspace Core

Router :: connect('/', ['controller'=>'App','action'=>'index']); //Router est une class / connect est une fonction declarer dans la class Router/ Premiere argument ($url) = a "/" / 2eme argument est un tableau, le controller App, et l'action = la methode = index qui est dans app
Router :: connect('/register', ['controller'=>'User','action'=>'add']);