
                                        
<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
//if($_SESSION['privilege']!="lecturer"){redirect_to("login.php");}
include_layout_template('header.php');

?>
<?php
    $staff_id=$_SESSION['staff_id'];
   $sub_id=$_GET['sub_id'];

    
    if(isset($_POST['submit'])){
		
		if(empty($_POST['batch'])){
			$errors['batch'] = "* Please enter the Batch.!";
		}
		
		if(empty($_POST['sem_id'])){
			$errors['sem_id'] = "* Semster ID field cannot be empty.!";
		}
		
        $batch_id=trim(mysql_prep($_POST['batch']));
        $sem_id=trim(mysql_prep($_POST['sem_id']));
        $course=trim(mysql_prep($_POST['course']));
        $index=trim(mysql_prep($_POST['index']));
		$mark=trim(mysql_prep($_POST['mark']));
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
			
		$table=$batch_id.$course.$sem_id;
		if(empty($errors)){
			global $database;
			$result = mysql_query("SHOW TABLES LIKE '$table'");
			$tableExist = mysql_num_rows($result) > 0;
			if($tableExist){
				//$sql="INSERT INTO `$table` (`grade2`) VALUES ('{$grade}')";
				//redirect_to("view_rp_list.php?table=$table&staff_id=$staff_id&sub_id=$sub_id&sem_id=$sem_id&batch=$batch_id&course=$course");
				$query2="SELECT grade2 FROM `$table` WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
				$arr2=$database->query($query2);
				$grade2=mysql_fetch_array($arr2);
				$g2=$grade2['grade2'];
				$query3="SELECT grade3 FROM `$table` WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
				$arr3=$database->query($query3);
				$grade3=mysql_fetch_array($arr3);
				$g3=$grade3['grade3'];
				$query4="SELECT grade4 FROM `$table` WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
				$arr4=$database->query($query4);
				$grade4=mysql_fetch_array($arr4);
				$g4=$grade4['grade4'];
				$query5="SELECT grade5 FROM `$table` WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
				$arr5=$database->query($query5);
				$grade5=mysql_fetch_array($arr5);
				$g5=$grade5['grade5'];
				$query6="SELECT grade6 FROM `$table` WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
				$arr6=$database->query($query6);
				$grade6=mysql_fetch_array($arr6);
				$g6=$grade6['grade6'];
				if(!$g2){
					$sql="UPDATE `$table` SET mark2='{$mark}', grade2='{$grade}' WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
					$ok=$database->query($sql);
				}elseif(!$g3){
					$sql="UPDATE `$table` SET mark3='{$mark}', grade3='{$grade}' WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
					$ok=$database->query($sql);
				}elseif(!$g4){
					$sql="UPDATE `$table` SET mark4='{$mark}', grade4='{$grade}' WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
					$ok=$database->query($sql);
				}elseif(!$g5){
					$sql="UPDATE `$table` SET mark5='{$mark}', grade5='{$grade}' WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
					$ok=$database->query($sql);
				}elseif(!$g6){
					$sql="UPDATE `$table` SET mark6='{$mark}', grade6='{$grade}' WHERE `index_no`='$index' AND `sub_id`='$sub_id'";
					$ok=$database->query($sql);
				}else{
					
				}
				
				if($ok){
					echo '<script language="javascript">';
					echo 'alert("Repeat Results sucessfully entered!")';
					echo '</script>';
				}
				
				
				
			}else{
				echo '<script language="javascript">';
				echo 'alert("error! You have no access to enter this results!")';
				echo '</script>';
			}
				
		}else{
			if(count($errors)==1){
				//$message="There was 1 error in the form.";
			}else{
				//$message="There were ". count($errors)." errors in the form.<br/>";
			}
		}
			
            
    }else{
        $batch="";
        $sem_id="";
        $course="";
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
								
                        <form id="input_batch" action="enter_index.php?sub_id=<?php echo $sub_id;?>" method="post" >
							<table id="form2" width="100%">

								<tr>
									<td id="batch">Enter Batch:</td>
									<td id="batch"><input type="text" name="batch" id="batch"/></td>
									<td><h6><?php if(isset($errors['batch'])) echo $errors['batch']; ?></h6></td>
								
										<td>Semster ID:</td>
										<td id="sem_id" ><input type="text" name="sem_id" id="sem_id"/></td>
									<td><h6><?php if(isset($errors['sem_id'])) echo $errors['sem_id']; ?></h6></td>
								
										<td>Course Name:</td>
										<td>
										<select name="course"> 
											<option name="course" value="<?php echo htmlentities($course="IS"); ?>">Information Systems</option>
											<option name="course" selected="selected" value="<?php echo htmlentities($course="CS"); ?>">Computer Science</option>
										</select>
									</tr>
								 
								  <tr>
										<td>Index No:</td>
										<td id="index" ><input type="text" name="index"/></td>
									<td><h6><?php //if(isset($errors['sem_id'])) echo $errors['sem_id']; ?></h6></td>
									
									<td>Marks:</td>
										<td id="mark" ><input type="number" name="mark"  min="0" max="100" size="5" maxlength="3" required></td>
									<td><h6><?php //if(isset($errors['sem_id'])) echo $errors['sem_id']; ?></h6></td>
								</tr>
								
								<tr>
									<td></td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" class="button_example" name="submit" value="Enter Result" />
									</td>
										<!--<p><span id="errorMsg"></span></p>-->
								</tr>
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