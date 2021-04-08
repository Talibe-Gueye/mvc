<?php
namespace libs\system;

    class View{
        public function __construct()
        {
            
        }
        //Cette fonction permet d'effectuer le chargement d'une view
        public function load()
        {
            //une fonction qui retourne le nombre d'argument (entier)
            $num = func_num_args();
            //cette fonction permet de recuperer un tableau d'argument
            $args = func_get_args();
            switch ($num) {
                case 1:
                    $file = "src/view/".$args[0].".php";
                    if(file_exists($file))
                    {
                        require_once $file;
                    }else {
                        die($file."n'existe pas comme vue");
                    }
                    break;
                 case 2:
                    $file = "src/view/".$args[0].".php";
                    if(file_exists($file))
                    {
                        $data = $args[1];
                        require_once $file;
                    }else {
                        die($file."n'existe pas comme vue");
                    }
                     break;

            }
        }
    }

?>