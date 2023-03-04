<?php 
 include_once(dirname(__FILE__)."../../autoload/spl.php");

class Db_section extends Db{
	protected $stmt;
	public function __construct(){
		parent::__construct();
	}

	public function query($query){
		$this->stmt = $this->get_db()->prepare($query);
	}

	public function fetch_result(){
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function execute(){
			$this->stmt->execute();
	}

	public function bind($param,$value,$type=null){

		 if (is_null($type)) {
        switch (true) {
          case is_int($value):
            $type = PDO::PARAM_INT;
          break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
          break;
          case is_array($value):
          $type = PDO::FETCH_ASSOC;
          break;
          case is_object($value):
          $type = PDO::FETCH_OBJ;
          break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
          break;

          default:
            $type = PDO::PARAM_STR;
          break;
        }
      }
      $this->stmt->bindValue($param, $value,$type);
	}
}

?>