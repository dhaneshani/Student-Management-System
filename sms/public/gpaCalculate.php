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
        //$year=trim(mysql_prep($_POST['year']));
        $sem_id=trim(mysql_prep($_POST['sem_id']));
		$course=trim(mysql_prep($_POST['course']));
		$id1=$batch.$course.$sem_id;
		$id2="gpa";
		$id3=$id1.$id2;

		if(empty($errors)){

			
			$new_semgpa=new SemesterGPA();
			$new_semgpa->batch=$batch;
			$new_semgpa->sem_id=$sem_id;
			$new_semgpa->course=$course;
			$new_semgpa->id=$id3;
			$new_semgpa->id1=$id1;

			global $database;
			$result = mysql_query("SHOW TABLES LIKE '$id1'");
			$tableExist = mysql_num_rows($result) > 0;
			if(!$tableExist){
				echo '<script language="javascript">';
				echo 'alert("error!This semester is still not started!")';
				echo '</script>';
				
			}else{
				
				$rslt=$new_semgpa->calculate();
				echo '<script language="javascript">';
				echo 'alert("GPA Calculated")';
				echo '</script>';
			}
			
		
		}else{
			if(count($errors)==1){
				$message="There was 1 error in the form.";
			}else{
				$message="There were ". count($errors)." errors in the form.<br/>";
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
						 <form id="user_form" action="gpaCalculate.php" method="post" >
							<table id="form2" width="100%">
                                
                                <?php echo $message; ?>
								<tr>
									<td id="batch">Batch:</td>
									<td id="batch"><input type="text" name="batch" id="batch" maxlength="50" size="50" value="<?php
									//echo htmlentities($full_name); ?>"/></td>
									<td><h6><?php //if(isset($errors['batch'])) echo $errors['batch']; ?></h6></td>
								</tr>
								
								<tr>
									<td id="sem_id">Semster ID:</td>
									<td id="sem_id"><input type="text" name="sem_id" id="sem_id" maxlength="50" size="50" value="<?php
									//echo htmlentities($full_name); ?>"/></td>
									<td><h6><?php //if(isset($errors['sem_id'])) echo $errors['sem_id']; ?></h6></td>
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
									<td colspan="2"><input type="submit"  class="button_example" name="submit" value="Calculate GPA" />
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
