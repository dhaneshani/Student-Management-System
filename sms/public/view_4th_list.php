<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="staff"){redirect_to("login.php");}
include_layout_template('header.php');
?>
<?php
    if($_POST['course']=='CS'){
            $batch=$_POST['batch'];
			$course=$_POST['course'];
            $new_overallgpa=new OverallGPA();
			$new_overallgpa->batch=$batch;
			$new_overallgpa->course=$course;
            
			$array=$new_overallgpa->cs_4th_list();
			
		}
        
		    if($_POST['course']=='IS'){
            $batch=$_POST['batch'];
			$course=$_POST['course'];
            $new_overallgpa=new OverallGPA();
			$new_overallgpa->batch=$batch;
			$new_overallgpa->course=$course;
            
			$array=$new_overallgpa->is_4th_list();
			while($arr = mysql_fetch_array($array,MYSQL_ASSOC)){
				echo "<tr><td id='tda'>";
				echo $arr["index_no"]."&nbsp</td>"."<td id='tda'>";
				echo $arr["gpa"]."</td><td id='tda'></tr>";
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
						<h2>View 4th Year list</h2>
						<table>
						<?php
						while($arr = mysql_fetch_array($array,MYSQL_ASSOC)){
							echo "<tr><td>";
							echo "<strong>".$arr["index_no"]."</strong>"."&nbsp</td>"."<td>";
							echo $arr["gpa"]."</td><td id='tda'></tr>";
						}
						?>
						</table>
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
				<tr> <?php //require("layouts/footer.php");?> </tr>
			</table>

