
                                        
<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="staff"){redirect_to("login.php");}
include_layout_template('header.php');

$course=$_GET['course'];

?>

			<table id="structure">
				<tr>
					<td id="navigation">
						<br/>
                        <a href="home.php">- Home<br/><br/></a>
						<a href="logout.php">- logout<br/><br/></a>
					</td>
					<td id="page">
						<table  id="tbl">
								<?php
								echo "<h4>Subjects: </h4>"."<br/>";
								echo "<tr><td id='tda'>";
										echo "<h4>Subject ID </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Subject Name </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Year </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Semester ID </h4>"."<br/>"."</td><td  id='tda'>";
										echo "<h4>Lecturers </h4>"."<br/>"."</td><td  id='tda'>";
										echo "<h4>Edit </h4>"."<br/>"."</td><td  id='tda'>";
										echo "<h4>Delete </h4>"."<br/>"."</td>";
                                
								$arr=Subject::find_by_course($course);
                                
									foreach ($arr as $sub){
										echo "<tr><td id='tda'>";
										echo $sub->sub_id."&nbsp</td>"."<td id='tda'>";
										 echo $sub->sub_name."</td><td id='tda'>";
										echo $sub->year."</td><td id='tda'>";
										echo $sub->sem_id."</td><td id='tda'>";
										
										echo "<a href='assign_lec.php?sub_id=$sub->sub_id' class='button_example'>Allocate Lecturer</a></td>&nbsp<td id='tda'>";
										echo "<a href='edit_subject.php?id=$sub->sub_id' class='button_example'>Edit</a></td><td id='tda'>";
										echo "<a href='delete_subject.php?id=$sub->sub_id' class='button_example'>Delete</a></td id='tda'></tr>";
									  
									}
								?>
						</table>
			
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