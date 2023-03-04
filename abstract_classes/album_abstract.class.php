<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

abstract class ParentGaleryAlbum extends Db_section {

	public function __construct(){
		parent::__construct();

	}

	abstract public function create_album($create);
	abstract public function add_album();
	abstract public function prepareBeforeStoreToDatabase();
	abstract public function returnCreate_album();
	abstract public function show_albums();
	abstract public function get_category_album();
	abstract public function galeryByAlbum($id);

}

?>