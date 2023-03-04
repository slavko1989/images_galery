<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

class GaleryModel extends ParentGalery{

	private $img_name;
	private $album_id;
	

	public function __construct(){
		parent::__construct();
		$this->img_name();
		$this->album_id();

		
	}

	public function img_name(){
		if(isset($_FILES["img_name"]["name"])){
			return $this->img_name = $_FILES["img_name"]["name"];
		}
	}
	public function album_id(){
		if(isset($_POST["album_id"])){
			return $this->album_id = $_POST["album_id"];
		}
	}


	public function create_images($create){}
	public function add_images(){}
	public function prepareBeforeStoreToDatabase(){}
	public function returnCreate_images(){}
	public function show_images(){}
	public function show_images_ByCategory($id){}


}

?>