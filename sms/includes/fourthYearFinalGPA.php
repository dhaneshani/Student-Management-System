<?php
require_once(LIB_PATH.DS.'database.php');
class FourthYearFinalGPA{
	
	public $batch;
	public $course;
    public $id;
    public $sem1;
    public $sem2;
    public $sem3;
    public $sem4;
	public $sem5;
	public $sem6;
	public $sem7;
	public $sem8;
	public $table1;

    
    public function calculate_4thYearGPA(){
		global $database;
			$result = mysql_query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysql_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
			if(mysql_num_rows(mysql_query("select * from `$this->id`"))==0){
				$sql="SELECT * FROM `$this->table1`";
				$result=$database->query($sql);
				while($student = mysql_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->sem1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysql_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->sem2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysql_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->sem3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysql_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->sem4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysql_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];

						$sql5="SELECT gpv,credits FROM `$this->sem5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysql_fetch_array($result5);
						$gpv5=$arr4["gpv"]; 
						$credits+=$arr5["credits"];

						$sql6="SELECT gpv,credits FROM `$this->sem6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysql_fetch_array($result6);
						$gpv6=$arr6["gpv"]; 
						$credits+=$arr6["credits"];

						$sql7="SELECT gpv,credits FROM `$this->sem7` WHERE index_no=$index_no";
						$result7=$database->query($sql7);
						$arr7 = mysql_fetch_array($result7);
						$gpv7=$arr7["gpv"]; 
						$credits+=$arr7["credits"];

						$sql8="SELECT gpv,credits FROM `$this->sem8` WHERE index_no=$index_no";
						$result8=$database->query($sql8);
						$arr8 = mysql_fetch_array($result8);
						$gpv8=$arr8["gpv"]; 
						$credits+=$arr8["credits"];
		
						
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6+$gpv7+$gpv8)/$credits;
						
						
							
							
						$sql9= "INSERT INTO `$this->id` (index_no,gpa) VALUES('$student[index_no]','$gpa') ";
						$database->query($sql9);

						

				}
			}else{
				echo '<script language="javascript">';
				echo 'if(confirm("GPA already calculated!\n To view click OK")==true){ window.location.assign("view_orl_gpa.php")}';
				echo '</script>';
			}

		}


}
	

?>