<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

class GaleryController extends GaleryModel{


	public function __construct(){
		parent::__construct();

	}

	public function create_images($create){
		$this->query("insert into galery(img_name,album_id)values(:img_name,:album_id)");
		$this->bind(":img_name",$create['img_name']);
		$this->bind(":album_id",$create['album_id']);
		return $this->execute();
	}

	public function add_images(){
		if(isset($_POST["add_img"]) && $_SERVER['REQUEST_METHOD']=="POST"){
			echo "added new photo";
			$this->returnCreate_images();
			$this->prepareBeforeStoreToDatabase();
		}
	}

	public function prepareBeforeStoreToDatabase(){

		$errors = array();
		$file = $this->img_name();
		$file_tmp = $_FILES['img_name']['tmp_name'];
		$folder = dirname(__FILE__)."../../images/".$file;
		$file_type = $_FILES['img_name']['type'];
		$file_size = $_FILES['img_name']['size'];
		$file_ext = pathinfo(
			$file,PATHINFO_EXTENSION);
		$ext = array("jpg","jpeg","png","avif");
		if(in_array($file_ext,$ext)===false){
			$errors[]="extension not alowed here";
		}
		if($file_size > 500000000){
			$errors[]="images is to big";
		}
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,$folder);
		}else{
			print_r($errors);
		}
	}

	public function returnCreate_images(){

		$add_img = array(
			"img_name"=>$this->img_name(),
			"album_id"=>$this->album_id()
		);
		if(is_array($add_img)){
			return $this->create_images($add_img);
		}
	}

	public function show_images(){

		$this->query("select * from galery");
		$this->execute();
		return $this->fetch_result();
	}

	public function show_images_ByCategory($id){
		$this->query("select galery.img_name, album.album_id 
			from galery
			inner join album
			on 
			galery.album_id = album.album_id
			where galery.album_id=album_id");
	}
}

?>