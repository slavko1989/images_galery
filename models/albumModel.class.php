<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

class AlbumModel extends ParentGaleryAlbum{

	private $album_name;
	private $album_id;

	public function __construct(){
		parent::__construct();
		$this->album_name();
		$this->album_id();
	}

	
	public function album_name(){
		if(isset($_POST["album_name"])){
			return $this->album_name = $_POST["album_name"];
		}
	}
	public function album_id(){
		if(isset($_POST["album_id"])){
			return $this->album_id = $_POST["album_id"];
		}
	}

	 public function create_album($create){}
	 public function add_album(){}
	 public function prepareBeforeStoreToDatabase(){}
	 public function returnCreate_album(){}
	 public function show_albums(){}
	 public function get_category_album(){}
	 public function galeryByAlbum($id){}	

}

?>