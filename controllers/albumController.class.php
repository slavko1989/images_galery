<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

class AlbumController extends AlbumModel{


	public function __construct(){
		parent::__construct();

	}

	public function create_album($create){
		$this->query("insert into album(album_name)values(:album_name)");
		$this->bind(":album_name",$create['album_name']);
		return $this->execute();
	}

	public function add_album(){
		if(isset($_POST["add_album"]) && $_SERVER['REQUEST_METHOD']=="POST"){
			echo "added new album";
			$this->returnCreate_album();
			$this->prepareBeforeStoreToDatabase();
		}
	}

	public function returnCreate_album(){

		$add_album = array(
			"album_name"=>$this->album_name()
		);
		if(is_array($add_album)){
			return $this->create_album($add_album);
		}
	}

	public function show_albums(){

		$this->query("select * from album");
		$this->execute();
		return $this->fetch_result();
	}
	public function galeryByAlbum($id){
		$this->query("select * from galery where album_id=:album_id");
		$this->bind(":album_id",$id);
		return $this->fetch_result();
	}

	public function get_category_album(){
		if(isset($_GET['album_id'])){
			return $this->galeryByAlbum($_GET['album_id']);
		}
	}
}

?>