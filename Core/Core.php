<?php
namespace Core;

use AppController;
use UserController;

class Core
{
    public function run()
    {
        require_once(implode(DIRECTORY_SEPARATOR , ['src','routes.php']));
        require_once("Core/Router.php");
        $url = substr($_SERVER["REDIRECT_URL"],7);
        $array = Router :: get($url);
        $class = $array["controller"]."Controller"; //controller est un index dans le tableau
        require_once("src/Controller/".$class.".php"); // importatiion de la class demander
        $methode = $array["action"]; //action est un index dans le tableau implementation de ma methode 
        $App = new $class; // 
        $App->$methode();//  
       
        //$methode = 
    }
    public function rundynamique()
    {
        $url = substr($_SERVER["REDIRECT_URL"],8); //recuperation de ce que je rentre dans l'url a partir du 8eme caractere
       // $array = explode("/",$url);
       // $Controller = $array[0]."Controller";
       // $Methode = $array[1];
        //require_once("src/Controller/".$Controller.".php");
        
        if($url == "")
        {
            $Controller ="AppController";
            $Methode = "index";
        }
        else // CONTROLLEUR/METHODE
        {
            $array = explode("/",$url); // cree un tableau depuis une string le separateur est donc "/"
            if(count($array) == 2) // si le nombre delement dans le tableau est == a 2
            {
                $Controller = $array[0]."Controller"; // index 0 = le Nom du controleur rentrer + concatenation de "Controlleur" 
                $Methode = $array[1]; // index 1 = le nom de la methode rentrer 
            }
            elseif(count($array)==1) // si le nombre delement dans le tableau est == a 1
            {
                $Controller = $array[0]."Controller"; //index 0 = le Nom du controleur rentrer + concatenation de "Controlleur" 
                $Methode = "index"; // methode = a index par defaut 
            }   
        }
        if(file_exists("src/Controller/".$Controller.".php")) // si le fichier existe dans "src/controller".Le nom du controleur dont le index 0 est renseigner dans lurl."php"
        {
            require_once("src/Controller/".$Controller.".php"); // importe le fichier dont le nom est renseigner dans lurl index0
            if(method_exists($Controller,$Methode)) // si la methode existe  Nom de la classe, nom de la methode
            {   
                $App = new $Controller;
                $App->$Methode();
            }
            else{echo"404 la methode n'est pas bonne";}
            
        }
        else{echo "404 le controller n'est pas bon";}
       
        
            //(count($array) == 1)
            //{
            //   // $App = new $Controller;
            //   // $App->index();
            //}
        
        
        
           
        
        
        
        //$App = new $Controller;
        //$App->$Methode();

       
        //$url = substr($_SERVER["REDIRECT_URL"],8);
       // echo $url;
       // $App = new UserController;
       // $App->add();


    }
}
