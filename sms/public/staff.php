
<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="staff"){redirect_to("login.php");}
include_layout_template('header.php');
?>
<?php

if(!empty($_POST['submit2'])){
	$arr=array();
	$sele_batch="";
	$sele="";
	$batch="";
	$course="";
	$errors = array();
	if(empty($_POST['index_no'])){
		$errors['index_no'] = "* Please enter a index Number to search!";
	}
	
	$index_no=trim(mysql_prep($_POST['index_no']));
	if(empty($errors)){
	$arr=Student::find_by_id($index_no);
	if(!$arr){
		redirect_to("view_students.php");
	}
	}
}elseif(!empty($_POST['submit1'])){
	$arr=array();
	$sele_batch="";
	$sele="";
	
	$batch=trim(mysql_prep($_POST['batch']));
	$course=trim(mysql_prep($_POST['course']));
		
	if($course=="All"){
		$arr=Student::find_students_batch($batch);
		$sele="all";
		
	}elseif($course=="CS"){
		$arr=Student::find_students($batch,$course);
		$sele="cs";
	}elseif($course=="IS"){
		$arr=Student::find_students($batch,$course);
		$sele="is";
	}
	$sele_batch=$batch;
	
}else{
	$index_no="";
	$batch="";
	$course="";
	$arr=array();
	$sele="";
	$sele_batch="";
}

?>

			<table id="structure">
				<tr>
					<td id="navigation">
						<a href="st_reg.php">- Student Registration</a><br/><br/>
						<a href="view_students.php">- View students</a><br/><br/>
						<br/>
						<a href="start_semster.php">- Start a semster</a><br/><br/>
						<a href="add_subject.php">- Add a subject</a><br/><br/>
						<a href="select_cs_is.php">- View Subjects</a><br/><br/>
						<br/>
						<a href="gpaCalculate.php">- Calculate GPA</a><br/><br/>
						<a href="view_gpa.php">- View semester GPA</a><br/><br/>
						<a href="calculateOverallGpa.php">- Calculate selection GPA</a><br/><br/>
						<a href="show_4th.php">- Show 4th year list</a><br/><br/>
						<a href="calculate4thYrFinalGPA.php">- Calculate 4th Year Final GPA </a><br/><br/>
						<a href="view_orl_gpa.php">- View selection GPA</a><br/><br/>
						<a href="cal_final_gpa.php">- Calculate final GPA</a><br/><br/>
						<a href="view_final_gpa.php">- View final GPA</a><br/><br/>
						<br/>
						<a href="change_pw.php">- Change password</a><br/><br/>
						<a href="logout.php">- Logout</a>
						<br/>
					</td>
					<td id="page">
						<h3>Examination Department</h3>
						<form  action="staff.php" method="post" name="submit1" id="user_form">
							<table>
								<tr>
							Search Batch: 
							<td>
							<select name="batch">
								<option name="batch" value="<?php echo htmlentities($batch="2012"); ?>" <?php if($sele_batch == "2012"){ print "selected='selected'"; } ?>>2012</option>
								<option name="batch" value="<?php echo htmlentities($batch="2013"); ?>" <?php if($sele_batch == "2013"){ print "selected='selected'"; } ?>>2013</option>
								<option name="batch" value="<?php echo htmlentities($batch="2014"); ?>" <?php if($sele_batch == "2014"){ print "selected='selected'"; } ?>>2014</option>
								<option name="batch" value="<?php echo htmlentities($batch="2015"); ?>" <?php if($sele_batch == "2015"){ print "selected='selected'"; } ?>>2015</option>
								<option name="batch" value="<?php echo htmlentities($batch="2016"); ?>" <?php if($sele_batch == "2016"){ print "selected='selected'"; } ?>>2016</option>
							</select>
							</td>
							<td>
							<select name="course">
								<option name="course" value="<?php echo htmlentities($course="All"); ?>" <?php if($sele == "all"){ print "selected='selected'"; } ?>>All Students</option>
								<option name="course" value="<?php echo htmlentities($course="IS"); ?>" <?php if($sele == "is"){ print "selected='selected'"; } ?>>Information Systems</option>
								<option name="course" value="<?php echo htmlentities($course="CS"); ?>" <?php if($sele == "cs"){ print "selected='selected'"; } ?>>Computer Science</option>
							</select>
							</td>
							<td><input id="submit1" name="submit1" class='button_example' type="submit" value="Search"></td>
							</tr>
							<tr>
							<td><input id="index_no" name="index_no" type="search" placeholder="Index No."></td>
							<td><input id="submit2" name="submit2" class='button_example' type="submit" value="Search"></td>
							<td id="comnt"><h6><?php if(isset($errors['index_no'])) echo $errors['index_no']; ?></h6></td>
							</tr>
							</table>
						
						
						<table id="tbl">
								<?php
								//echo "<h4>Students: </h4>"."<br/>";
								echo "<tr><td id='tda'>";
										echo "<h4>Index No </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Reg: No </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Name with Initials </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Course </h4>"."<br/>"."</td><td  id='tda'>";
										echo "<h4>Date of Birth </h4>"."<br/>"."</td><td  id='tda'>";
										echo "<h4>Email </h4>"."<br/>"."</td><td  id='tda'>";
								//$arr=Student::find_all();
									foreach ($arr as $st){
										echo "<tr><td id='tda'>";
										echo $st->index_no."</td><td id='tda'>";
										echo $st->reg_no."</td><td id='tda'>";
                                        echo $st->nwi."</td><td id='tda'>";
                                        echo $st->course."</td><td id='tda'>";
                                        echo $st->dob."</td><td id='tda'>";
                                        echo $st->email."</td><td id='tda'>";
								
										$idn=$st->index_no;
										echo "<a href='edit_student.php?id=$idn'  class='button_example'> Edit Info </a>"."&nbsp&nbsp";
										echo "<a href='delete_student.php?id=$idn'  class='button_example'>Unregister</a></td></tr>";
									}
								
		
								?>
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
			<table>
				<tr> <?php require("layouts/footer.php");?> </tr>
			</table>

<?php //require("layouts/footer.php");?>