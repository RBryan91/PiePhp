<?php
namespace Core;
class Router
{
    private static $routes;
    public static function connect ($url,$route) // prend en premiere argument url ("/") en 2 un tableau 
    {
        self::$routes[$url] = $route;   // self car la variable est static 
                                        // $routes est un tableau qui contient tout 
                                        //var_dump(self::$routes);
    }
    public static function get ($url)
    {
        return self::$routes[$url];
       // return $rou
       // //retourne un tableau associatif contenant 
        
    }
}
