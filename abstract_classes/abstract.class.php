<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

abstract class ParentGalery extends Db_section {

	public function __construct(){
		parent::__construct();

	}

	abstract public function create_images($create);
	abstract public function add_images();
	abstract public function prepareBeforeStoreToDatabase();
	abstract public function returnCreate_images();
	abstract public function show_images();
	abstract public function show_images_ByCategory($id);


}

?>