<?php

namespace Core;

class Autoloader
{
    public function registration():void
    {
        $autoloader = function (string $className) {
            $helper = str_replace('\\', '/', $className);
            $path = "./../$helper.php";
            if (file_exists($path)) {
                require_once $path;
                return true;
            } else {
                return false;
            }
        };

        spl_autoload_register($autoloader);
    }

//    public function registrate()
//    {
//        $autoloadController = function (string $className)
//        {
//            $path = "./../Controller/$className.php";
//            if (file_exists($path)) {
//                require_once $path;
//
//                return true;
//            }
//            return false;
//        };
//
//        $autoloadModel = function (string $className)
//        {
//            $path = "./../Model/$className.php";
//            if (file_exists($path)) {
//                require_once $path;
//
//                return true;
//            }
//            return false;
//        };
//
//        $autoloadCore = function (string $className)
//        {
//            $path = "./../Core/$className.php";
//            if (file_exists($path)) {
//                require_once $path;
//
//                return true;
//            }
//            return false;
//        };
//
//        spl_autoload_register($autoloadController);
//        spl_autoload_register($autoloadModel);
//        spl_autoload_register($autoloadCore);
//    }
}