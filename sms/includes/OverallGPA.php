<?php
require_once(LIB_PATH.DS.'database.php');
class OverallGPA{
	
	public $batch;
	public $course;
    public $id;
    public $id1;
    public $id2;
    public $id3;
    public $id4;
	public $id5;
	public $table1;

    
    public function calculate_OverallGPA() {
		global $database;
			$result = mysql_query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysql_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
			if(mysql_num_rows(mysql_query("select * from `$this->id`"))==0){
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysql_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysql_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysql_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysql_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysql_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];
		
						
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4)/$credits;
						
						
							
							
						$sql5= "INSERT INTO `$this->id` (index_no,gpa) VALUES('$student[index_no]','$gpa') ";
						$database->query($sql5);

						

				}
			}else{
				echo '<script language="javascript">';
				echo 'if(confirm("GPA already calculated!\n To view click OK")==true){ window.location.assign("view_orl_gpa.php")}';
				echo '</script>';
			}

		}

	public function get4thYrLst(){
		global $database;
		$sql1="CREATE TABLE $this->table1 (index_no int(8) ,gpa float(50) ,PRIMARY KEY ( index_no))";
        $database->query($sql1);
        if($this->course=='CS'){
        $array=$this->cs_4th_list();
    	}else if($this->course=='IS'){
        $array=$this->is_4th_list();
    	}
		while($arr = mysql_fetch_array($array,MYSQL_ASSOC)){
			$index=$arr["index_no"];
			$gpa=$arr["gpa"];
			$sql2= "INSERT INTO `$this->table1` (index_no,gpa) VALUES('$index','$gpa') ";
			$database->query($sql2);
				
		}

	}
		
    public function calculate_finalGPA() {
		global $database;
			$result = mysql_query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysql_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
			if(mysql_num_rows(mysql_query("select * from `$this->id`"))==0){
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysql_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysql_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysql_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysql_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysql_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];
		
						$sql5="SELECT gpv,credits FROM `$this->id5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysql_fetch_array($result5);
						$gpv5=$arr5["gpv"]; 
						$credits+=$arr5["credits"];
						
						$sql6="SELECT gpv,credits FROM `$this->id6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysql_fetch_array($result6);
						$gpv6=$arr6["gpv"]; 
						$credits+=$arr6["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6)/$credits;
							
						$sql= "INSERT INTO `$this->id` (index_no,gpa) VALUES('$student[index_no]','$gpa') ";
						$database->query($sql);

				}
			}else{
				echo '<script language="javascript">';
				echo 'if(confirm("GPA already calculated!\n To view click OK")==true){ window.location.assign("view_orl_gpa.php")}';
				echo '</script>';
			}

		}
		
		public function cs_4th_list(){
			$table=$this->batch.$this->course."overallgpa";
			$sql="SELECT * FROM `$table` order by `gpa` desc limit 40";
			global $database;
			$arr=$database->query($sql);
			return $arr;
		}

		public function is_4th_list(){
			$table=$this->batch.$this->course."overallgpa";
			$sql="SELECT * FROM `$table` order by `gpa` desc limit 20";
			global $database;
			$arr=$database->query($sql);
			return $arr;
		}

		
        
	}
	

?>