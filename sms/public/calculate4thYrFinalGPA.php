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
		$id=$batch.$course."4thYrFinalGPA";
		$sem1="1";
		$sem2="2";
		$sem3="3";
		$sem4="4";
		$sem5="5";
		$sem6="6";
		$sem7="7";
		$sem8="8";
		$id9="gpa";
		$id1=$batch.$course.$sem1.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id1'");
			$tableExist1 = mysql_num_rows($result) > 0;
			
			
		$id2=$batch.$course.$sem2.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id2'");
			$tableExist2 = mysql_num_rows($result) > 0;
			
			
		$id3=$batch.$course.$sem3.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id3'");
			$tableExist3 = mysql_num_rows($result) > 0;
			
			
		$id4=$batch.$course.$sem4.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id4'");
			$tableExist4 = mysql_num_rows($result) > 0;

		$id5=$batch.$course.$sem5.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id5'");
			$tableExist5 = mysql_num_rows($result) > 0;

		$id6=$batch.$course.$sem6.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id6'");
			$tableExist6 = mysql_num_rows($result) > 0;

		$id7=$batch.$course.$sem7.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id7'");
			$tableExist7 = mysql_num_rows($result) > 0;

		$id8=$batch.$course.$sem8.$id9;
			$result = mysql_query("SHOW TABLES LIKE '$id8'");
			$tableExist8 = mysql_num_rows($result) > 0;
			

		if(empty($errors)&&$tableExist1&&$tableExist2&&$tableExist3&&$tableExist4&&$tableExist5&&$tableExist6&&$tableExist7&&$tableExist8){

			
			$new_4thYearFinalgpa=new FourthYearFinalGPA();
			$new_4thYearFinalgpa->batch=$batch;
			$new_4thYearFinalgpa->course=$course;
			$new_4thYearFinalgpa->id=$id;
			$new_4thYearFinalgpa->sem1=$id1;
			$new_4thYearFinalgpa->sem2=$id2;
			$new_4thYearFinalgpa->sem3=$id3;
			$new_4thYearFinalgpa->sem4=$id4;
			$new_4thYearFinalgpa->sem5=$id5;
			$new_4thYearFinalgpa->sem6=$id6;
			$new_4thYearFinalgpa->sem7=$id7;
			$new_4thYearFinalgpa->sem8=$id8;
			$new_4thYearFinalgpa->table1=$batch.$course."4thYrlist";
			$rslt=$new_4thYearFinalgpa->calculate_4thYearGPA();
			
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
			if(!$tableExist5){
				echo '<script language="javascript">';
				echo 'alert("error!\n5th semester is still not started!")';
				echo '</script>';			
			}
			if(!$tableExist6){
				echo '<script language="javascript">';
				echo 'alert("error!\n6th semester is still not started!")';
				echo '</script>';			
			}
			if(!$tableExist7){
				echo '<script language="javascript">';
				echo 'alert("error!\n7th semester is still not started!")';
				echo '</script>';			
			}
			if(!$tableExist8){
				echo '<script language="javascript">';
				echo 'alert("error!\n8th semester is still not started!")';
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
						<h2>Calculate 4th Year Final GPA</h2>
						<?php //if(!empty($message)){echo "<p class=\"message\">".$message."</p>";} ?>
						 <?php// if(!empty($errors)){display_errors($errors);} ?>
						 <form id="user_form" action="calculate4thYrFinalGPA.php" method="post" >
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
