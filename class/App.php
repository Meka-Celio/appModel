<?php


// class App 
// {
//     /**
//      * Permet le fonctionnement général de l'application
//      * @return void
//      */
//     public static function start () 
//     {
//         $controllerName =   "Article";
//         $task           =   "index";

//         if (!empty($_GET['controller']))
//         {
//             $controllerName = ucfirst($_GET['controller']);
//         }

//         if (!empty($_GET['task']))
//         {
//             $task = $_GET['task'];
//         }

//         $controllerName =   "\controllers\\" . $controllerName;

//         $controller     =   new $controllerName();
//         $controller->$task();
//     }
// }