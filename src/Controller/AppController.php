<?php
require_once("Core/Controller.php");
class AppController extends \Core\Controller
{
    public function index ()
    {
        echo "je suis index AppController dynamique";
    }
}