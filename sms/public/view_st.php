<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
//if($_SESSION['privilege']!="lecturer"){redirect_to("login.php");}
include_layout_template('header.php');
$table=$_GET['table'];
$staff_id=$_SESSION['staff_id'];
$sub_id=$_GET['sub_id'];
$sem_id=$_GET['sem_id'];
$batch=$_GET['batch'];
$course=$_GET['course'];
?>
<?php
    if(isset($_POST['submit'])){	
        
        $arr=Student::find_students($batch,$course);
        global $database;
		foreach ($arr as $st){
            $index=$st->index_no;
            $mark=$_POST[$index];
            $grade;  
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


            $sql = "INSERT INTO `ucsc_sms`.`$table` (";
			$sql.="`index_no` ,";
			$sql.="`sub_id` ,";
			$sql.="`mark` ,"; 
			$sql.="`grade`";
			$sql.=")";
			$sql.="VALUES (";
			$sql.="'{$index}', '{$sub_id}','{$mark}','{$grade}'";
			$sql.=") ";

            $database->query($sql);
        }
        echo '<script language="javascript">';
		echo 'alert("Results entered to the database!")';
		echo '</script>';
    }

?>

			<table id="structure">
				<tr>
					<td id="navigation">
						<br/>
                        <a href="home.php">- Home<br/><br/></a>
						<a href="logout.php">- logout<br/><br/></a>
					</td>
					<td id="page">
						
                            <form id="enter_res" action="view_st.php?table=<?php echo $table;?>&staff_id=<?php echo $staff_id;?>&sub_id=<?php echo $sub_id;?>&sem_id=<?php echo $sem_id;?>&batch=<?php echo $batch;?>&course=<?php echo $course;?>" method="post" >
								<table>
                                <?php
								echo "<h4>Students: </h4>"."<br/>";
								$arr=Student::find_students($batch,$course);
									foreach ($arr as $st){
										echo "<tr><td>";
										 echo $st->index_no."</td><td>";
										$idn=$st->index_no;
										echo "<input type=\"text\" name=\"$idn\">";
									}
								
								?>
                                <input type="submit" name="submit" class="button_example" value="Enter Results" />
                            </table>
                        </form>
					</td>
					
                       
                        
					<td id="logindetails">
						<div class="details">
						<img src="images/user.jpg" style="width:150px;height:150px;">
						<h4>Login Details</h4>
						<?php
								echo "You have logged in as: ";
								echo $session->privilege." user"."<br/><br/>";
								//print_r(User::find_by_id($session->user_id));
								$arr=User::find_by_id($session->user_id);
								echo "Name: ";
								echo $arr->name."<br/><br/>";
								echo "Staff_id:";
								echo $arr->staff_id."<br/><br/>";
								echo "email:";
								echo $arr->email."<br/>";
								
                        ?>
                    </div>
					</td>
				</tr>
			</table>
<?php //require("includes/footer.php");?>
