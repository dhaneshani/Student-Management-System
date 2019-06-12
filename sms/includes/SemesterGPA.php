
<?php
require_once(LIB_PATH.DS.'database.php');

class SemesterGPA{
	
	public $batch;
	public $sem_id;
	public $course;
    public $id;
    public $id1;
	
    
    public function calculate() {
		global $database;

		$result = mysql_query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysql_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id ( index_no int(8) ,
												gpa float(50) ,
												gpv float(50) ,
												credits int(2),
												PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);			
			}
			
			if(mysql_num_rows(mysql_query("select * from `$this->id`"))==0){	
				$sql4="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result4=$database->query($sql4);
				while($student = mysql_fetch_array($result4,MYSQL_ASSOC)){
						
						$sql1="SELECT sub_id FROM `$this->id1` WHERE index_no=$student[index_no]";
						$result1=$database->query($sql1);
						
						
						//$sql3="SELECT sub_id,Credits FROM subjects WHERE course='$this->course' AND sem_id='$this->sem_id'";
						//$result3=$database->query($sql3);
						$credits=0;
						$gpv=0;
						$gpa;
						while($arr = mysql_fetch_array($result1,MYSQL_ASSOC)){
		
							$su=$arr["sub_id"] ;
							$sql3="SELECT sub_id,Credits FROM subjects WHERE sub_id='$su' ";
							$result3=$database->query($sql3);
							$sub=mysql_fetch_array($result3,MYSQL_ASSOC);
							
							$sql6="SELECT mark,mark2,mark3,mark4,mark5,mark6 FROM `$this->id1` WHERE index_no=$student[index_no] AND sub_id='$su'";
							$result6=$database->query($sql6);
							$arr1 = mysql_fetch_array($result6,MYSQL_ASSOC);
							$array=array($arr1['mark'],$arr1['mark2'],$arr1['mark3'],$arr1['mark4'],$arr1['mark5'],$arr1['mark6']);
							$mark=max($array);
							if ($mark<100 && $mark>89)
								{$grade = 'A+';}
							else if ($mark<90 && $mark>79)
								{$grade = 'A';}
							else if ($mark<80 && $mark>74)
								{$grade = 'A-';}
							else if ($mark<75 && $mark>69)
								{$grade = 'B+';}
							else if ($mark<70 && $mark>64)
								{$grade = 'B-';}
							else if ($mark<65 && $mark>59)
								{$grade = 'C+';}
							else if ($mark<60 && $mark>54)
								{$grade = 'C';}
							else if ($mark<55 && $mark>49)
								{$grade = 'C-';}
							else if ($mark<50 && $mark>44)
								{$grade = 'D+';}
							else if ($mark<45 && $mark>39)
								{$grade = 'D';}
							else if ($mark<40 && $mark>29)
								{$grade = 'D-';}
							else if ($mark<30 && $mark>19)
								{$grade = 'E';}
							else {$grade = 'F';}
							/////////////////////////////
							//echo $student['index_no'].$grade."<br>";
							if ($grade=='A+'){
								$gpv+=4*$sub["Credits"];
								$credits+=$sub["Credits"]; 
							}
							if ($grade=='A'){
								$gpv+=4*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
							 
							if ($grade=='A-'){
								$gpv+=3.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B+'){
								$gpv+=3.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B'){
								$gpv+=3*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B-'){
								$gpv+=2.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C+'){
								$gpv+=2.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C'){
								$gpv+=2*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C-'){
								$gpv+=1.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D+'){
								$gpv+=1.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D'){
								$gpv+=1*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D-'){
								$gpv+=0.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='E'){
								$credits+=$sub["Credits"];
							}
								
						}
		
							$gpa=$gpv/$credits;
							//echo $student[index_no]."<br>";
							//echo "<br>gpa=".$gpa."gpv=".$gpv."<br>";
							
							
							$sql5= "INSERT INTO `$this->id` (index_no,gpa,gpv,credits) VALUES('$student[index_no]','$gpa','$gpv','$credits') ";
							$database->query($sql5);

				}
				}else{
					echo '<script language="javascript">';
					echo 'if(confirm("GPA already calculated!\n To view click OK")==true){ window.location.assign("view_gpa.php")}';
					echo '</script>';

			}

		
        
	}
	
	
}

?>
