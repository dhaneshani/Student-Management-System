<?php
require_once(LIB_PATH.DS.'database.php');

class Student{
    protected static $table_name="students";
	protected static $db_fields = array('id','index_no', 'reg_no', 'nic','full_name', 'nwi', 'batch', 'course', 'address', 'contact_no', 'email', 'gender', 'dob');
    
    public $id;
	public $index_no; //1300****
	public $reg_no; // 2013cs***
	public $nic;
    public $full_name;
    public $nwi; // name with initials
	public $batch;
    public $course;    
    public $address;
    public $contact_no;
    public $email;
	public $gender;
    public $dob; //date of birth
    public function create() {
		global $database;
		$sql = "INSERT INTO ".self::$table_name." (";
		$sql .= "index_no, reg_no, nic,full_name, nwi, batch, course, address, contact_no, email, gender, dob ";
		$sql .= ") VALUES ('";
		$sql .= $database->escape_value($this->index_no)."', '";
		$sql .= $database->escape_value($this->reg_no)."', '";
		$sql .= $database->escape_value($this->nic)."', '";
		$sql .= $database->escape_value($this->full_name)."', '";
		$sql .= $database->escape_value($this->nwi)."', '";
		$sql .= $database->escape_value($this->batch)."', '";
		$sql .= $database->escape_value($this->course)."', '";
		$sql .= $database->escape_value($this->address)."', '";
		$sql .= $database->escape_value($this->contact_no)."', '";
		$sql .= $database->escape_value($this->email)."', '";
		$sql .= $database->escape_value($this->gender)."', '";
		$sql .= $database->escape_value($this->dob)."')";
	if($database->query($sql)) {
	    $this->id = $database->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}
	
	public function update() {
	  global $database;

		$sql = "UPDATE ".self::$table_name." SET ";
		$sql .="reg_no='{$this->reg_no}', ";
		$sql .="nic='{$this->nic}', ";
		$sql .="full_name='{$this->full_name}', ";
		$sql .="nwi='{$this->nwi}', ";
		$sql .="batch='{$this->batch}', ";
		$sql .="course='{$this->course}', ";
		$sql .="address='{$this->address}', ";
		$sql .="contact_no='{$this->contact_no}', ";
		$sql .="email='{$this->email}', ";
		$sql .="gender='{$this->gender}', ";
		$sql .="dob='{$this->dob}' ";
		$sql .= " WHERE index_no=". $this->id;
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
	}
	
  public static function find_all(){
		global $database;
	    $sql = "SELECT * FROM students";
		$arr=self::find_by_sql($sql);
		return $arr;
	}
	public static function find_students($batch,$course){
		global $database;
	    $sql = "SELECT * FROM students WHERE course='{$course}' AND batch={$batch} ";
		$arr=self::find_by_sql($sql);
		return $arr;
	}
	
	public static function find_students_batch($batch){
		global $database;
	    $sql = "SELECT * FROM students WHERE batch={$batch} ";
		$arr=self::find_by_sql($sql);
		return $arr;
	}
	
	public static function find_table($table){
		global $database;
	    $sql = "SELECT index_no FROM $table";
		$arr=self::find_by_sql($sql);
		return $arr;
	}
	
	public static function find_by_id($id=0) {
    $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE index_no={$id} LIMIT 1");
		return !empty($result_array) ? $result_array : false;
  }
  public static function find_by_index($id=0) {
    $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE index_no={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
  }
  
  public static function find_by_sql($sql="") {
    global $database;
    $result_set = $database->query($sql);
    $object_array = array();
    while ($row = $database->fetch_array($result_set)) {
      $object_array[] = self::instantiate($row);
    }
    return $object_array;
  }
  
  private static function instantiate($record) {
		// Could check that $record exists and is an array
    $object = new self;
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  $attributes = array();
	  foreach(self::$db_fields as $field) {
	    if(property_exists($this, $field)) {
	      $attributes[$field] = $this->$field;
	    }
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $database;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $database->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	public static function del_student($id){
		global $database;
	  $sql = "DELETE FROM ".self::$table_name;
	  $sql .= " WHERE index_no=". $id;
	  $sql .= " LIMIT 1";
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
  }
	
}

?>