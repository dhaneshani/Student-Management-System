<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="staff"){redirect_to("login.php");}
include_layout_template('header.php');
?>

<?php

    if(isset($_POST['submit'])){
		
		if(empty($_POST['batch'])){
			$errors['batch'] = "* Subject ID field cannot be empty.";
		}
		
		
        $batch=trim(mysql_prep($_POST['batch']));
		$course=trim(mysql_prep($_POST['course']));
		$id1=$batch.$course;
		$id2="overallgpa";
		$id3=$id1.$id2;
		$sem1="1";
		$sem2="2";
		$sem3="3";
		$sem4="4";
		$id4="gpa";
		$id5=$batch.$course.$sem1.$id4;
			$result = mysql_query("SHOW TABLES LIKE '$id5'");
			$tableExist1 = mysql_num_rows($result) > 0;
			
			
		$id6=$batch.$course.$sem2.$id4;
			$result = mysql_query("SHOW TABLES LIKE '$id6'");
			$tableExist2 = mysql_num_rows($result) > 0;
			
			
		$id7=$batch.$course.$sem3.$id4;
			$result = mysql_query("SHOW TABLES LIKE '$id7'");
			$tableExist3 = mysql_num_rows($result) > 0;
			
			
		$id8=$batch.$course.$sem4.$id4;
			$result = mysql_query("SHOW TABLES LIKE '$id7'");
			$tableExist4 = mysql_num_rows($result) > 0;
			

		if(empty($errors)&&$tableExist1&&$tableExist2&&$tableExist3&&$tableExist4){

			
			$new_overallgpa=new OverallGPA();
			$new_overallgpa->batch=$batch;
			$new_overallgpa->course=$course;
			$new_overallgpa->id=$id3;
			$new_overallgpa->id1=$id5;
			$new_overallgpa->id2=$id6;
			$new_overallgpa->id3=$id7;
			$new_overallgpa->id4=$id8;
			$new_overallgpa->table1=$batch.$course."4thYrList";
			$rslt=$new_overallgpa->calculate_OverallGPA();
			$new_overallgpa->get4thYrLst();
				echo '<script language="javascript">';
				echo 'alert("GPA Calculated")';
				echo '</script>';
			
		
		}else{
			if(!$tableExist1){
				echo '<script language="javascript">';
				echo 'alert("error!\n1st semester is still not started!")';
				echo '</script>';
			}
			if(!$tableExist2){
				echo '<script language="javascript">';
				echo 'alert("error!\n2nd semester is still not started!")';
				echo '</script>';				
			}
			if(!$tableExist3){
				echo '<script language="javascript">';
				echo 'alert("error!\n3rd semester is still not started!")';
				echo '</script>';				
			}
			if(!$tableExist4){
				echo '<script language="javascript">';
				echo 'alert("error!\n4th semester is still not started!")';
				echo '</script>';			
			}
		}
			
            
    }


?>


			<table id="structure">
				<tr>
					<td id="navigation">
						<a href = "home.php">Home</a><br/>
						<br/>
					</td>
					<td id="page">
						<h2>Calculate GPA</h2>
						<?php //if(!empty($message)){echo "<p class=\"message\">".$message."</p>";} ?>
						 <?php// if(!empty($errors)){display_errors($errors);} ?>
						 <form id="user_form" action="calculateOverallGpa.php" method="post" >
							<table id="form2" width="100%">
                                
                                <?php echo $message; ?>
								<tr>
									<td id="batch">Batch:</td>
									<td id="batch"><input type="text" name="batch" id="batch" maxlength="50" size="50" value="<?php
									//echo htmlentities($full_name); ?>"/></td>
									<td><h6><?php //if(isset($errors['batch'])) echo $errors['batch']; ?></h6></td>
								</tr>


                                
								<tr>
                                 <tr>
										<td>Course Name:</td>
										<td><select name="course"> 
											<option name="course" value="<?php echo htmlentities($course="IS"); ?>">Information Systems</option>
											<option name="course" selected="selected" value="<?php echo htmlentities($course="CS"); ?>">Computer Science</option>
										</select>
									</tr>

								
								<tr>
									<td></td>
								</tr>
                                
                                
								<tr>
									<td colspan="2"><input type="submit"  class="button_example" name="submit" value="Calculate Overall_GPA" />
									</td>
										
								</tr>
							</table>
						 </form>
					</td>
					<td id="logindetails">
						<img src="images/user.jpg" style="width:150px;height:150px;">
						<h4>Login Details</h4>
						<?php
								echo "You have logged in as: ";
								echo $session->privilege." user"."<br/><br/>";
								
								$arr=User::find_by_id($session->user_id);
								echo "Name: ";
								echo $arr->name."<br/><br/>";
								echo "Staff_id:";
								echo $arr->staff_id."<br/><br/>";
								echo "email:";
								echo $arr->email."<br/>";
								
                        ?>
					</td>
				</tr>
			</table>
			<table>
				<tr> <?php require("layouts/footer.php");?> </tr>
			</table>

<!-- <script src="javascripts/script.js"></script> >
