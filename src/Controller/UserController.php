<?php
require_once("Core/Controller.php");
class UserController extends \Core\Controller
{
    public function User ()
    {
        include("src/Model/UserModel.php");
        $oui = new UserModel;
        $oui->Connect();
    }
    public function add()
        {
            $this ->render('register'); // Va  rendre  la vue src/View/User/register.php}
            echo "Je suis add de UserController Dynamique";
        }
        public function index ()
    {
        echo "je suis index UserController dynamique";
    }
}