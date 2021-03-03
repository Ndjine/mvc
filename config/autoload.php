<?php
namespace config;
use libs\system\BootStrap;
class  Autoloader{

static function register(){
    spl_autoload_register(array(__CLASS__, "autoload"));
                        }
static function autoload($class){
  //  echo str_replace("\\", "/",$class);
    if(file_exists("src/model/".$class.".php")){
        echo 14;
        require_once "src/model/".$class.".php";
    }
    else if(file_exists("src/controller/".$class.".php"))
    {
        echo 15;
          require_once "src/controller/".$class.".php";
         //namespace
    }
    
    else if(file_exists(str_replace("\\", "/",$class.".php"))){
      echo 16;echo $class;
           require_once str_replace("\\", "/",$class.".php");
        }else{
            echo 17;
            die("merci d'utiliser le mot cle USE suivi de ".$class);
    }

}
    }



Autoloader::register();

?>