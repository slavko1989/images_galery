<?php

		include_once(dirname(__FILE__)."/../database/db.class.php");
    include_once(dirname(__FILE__)."../../database/db_section.class.php");
    include_once(dirname(__FILE__)."../../abstract_classes/abstract.class.php");
    include_once(dirname(__FILE__)."../../abstract_classes/album_abstract.class.php");
		include_once(dirname(__FILE__)."../../models/galeryModel.class.php");
    include_once(dirname(__FILE__)."../../models/albumModel.class.php");
		include_once(dirname(__FILE__)."../../controllers/galeryController.class.php");
    include_once(dirname(__FILE__)."../../controllers/albumController.class.php");

		

spl_autoload_register('autoload');

function autoload($class){
    $path_model = dirname(__FILE__)."../../models/";
    $extension = ".class.php";
    $fullPathModel = $path_model .  $class . $extension;
      if(!file_exists($fullPathModel)){
        return false;
    }
    $path_controller = dirname(__FILE__)."../../controllers/";
    $extension = ".class.php";
    $fullPathController = $path_controller .  $class . $extension;
      if(!file_exists($fullPathController)){
        return false;
    }
     $path_abstract = dirname(__FILE__)."../../abstract_classes/";
    $extension = ".class.php";
    $fullPathAbstract = $path_abstract .  $class . $extension;
      if(!file_exists($fullPathAbstract)){
        return false;
    }
     $path_db = dirname(__FILE__)."../../database/";
    $extension = ".class.php";
    $fullPathDb = $path_db .  $class . $extension;
      if(!file_exists($fullPathDb)){
        return false;
    }
    /*$path_view = dirname(__FILE__)."../../view/";
    $extension = ".class.php";
    $fullPathView = $path_controller .  $class . $extension;
      if(!file_exists($fullPathView)){
        return false;
    }*/
    
}


?>