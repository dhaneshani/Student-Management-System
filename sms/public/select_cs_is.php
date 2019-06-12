                                        
<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="staff"){redirect_to("login.php");}
include_layout_template('header.php');
?>

			<table id="structure">
				<tr>
					<td id="navigation">
						<br/>
                        <a href="home.php">- Home<br/><br/></a>
						<a href="logout.php">- logout<br/><br/></a>
					</td>
					<td id="page">
						<table >

							<tr>
								<h4>Select Course </h4>
							</tr>
							<tr >
								<td>
								<a href=view_subjects.php?course=CS class="button_example"><h4>Computer Science</h4></a>
								</td>
								<td>
								<a href=view_subjects.php?course=IS class="button_example"><h4>Information System</h4></a>
								</td>
							</tr>
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
			<table>
				<tr> <?php require("layouts/footer.php");?> </tr>
			</table>
<?php //require("includes/footer.php");?>