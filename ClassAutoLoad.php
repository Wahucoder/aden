<?php

require_once "config.php";

    function ClassAutoLoad($ClassName){
        $directories = array("contents","forms", "layouts", "globals");
        foreach($directories AS $dir){
            $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
            if(is_readable($FileName)){
                require $FileName;
            }
        }
    }
    spl_autoload_register('ClassAutoLoad', true, true);

// instantiating classes
// creating objects.

$OBJ_Layout = NEW layouts();
$OBJ_Contents = NEW contents();
$OBJ_Forms = NEW forms();
$OBJ_SendMail = NEW SendMail();