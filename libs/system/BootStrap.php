<?php
namespace libs\system;
use libs\system\BootStrap;
class BootStrap {
    public function __constuct()
    {
        echo 15;
        if(isset($_GET["url"])){
            
            $url =explode("/", $_GET["url"]);
            $controller_file ="src/controller/".$url[0].".php";
            if(file_exists($controller_file)){
                require_once $controller_file;
                $file = $url[0]."Controller";
                $controller_object = new $file();
                if (isset($url[2])){
                    $method = $url[1];
                    if (method_exists($controller_object, $method)){
                        $controller_object->$metode($url[2]);
                    }else{
                        die($method."n'existe pas dans le controller".$file);
                    }
                }
               else if(isset($url[1])){
                    $method = $url[1];
                    if (method_exists($controller_object, $method)){
                        $controller_object->$metode($url[1]);
                    }else{
                        die($method."n'existe pas dans le controller".$file);
                    }
                    $controller_object->$method();
                }

                     }else{
                die($controller_file."n'existe pas");
                    }
        }else{

            echo "MVC";
        }
    }

    }




 ?>