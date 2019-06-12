
                                        
<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="staff"){redirect_to("login.php");}
include_layout_template('header.php');

$id=$_GET['id'];

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
								echo "<h4>Students GPA List: </h4>"."<br/>";
								echo "<tr><td id='tda'>";
								echo "<h4>Index No</h4>"."<br/>"."</td>"."<td  id='tda'>";
								echo "<h4>GPA </h4>"."<br/>"."</td>";
                                
								$sql1="SELECT * FROM ".$id;
								$result1=$database->query($sql1);
                                
									while($arr = mysql_fetch_array($result1,MYSQL_ASSOC)){
										echo "<tr><td id='tda'>";
										echo $arr["index_no"]."&nbsp</td>"."<td id='tda'>";
										echo $arr["gpa"]."</td><td id='tda'></tr>";
									  
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
			<table>
				<tr> <?php require("layouts/footer.php");?> </tr>
			</table>
<?php //require("includes/footer.php");?>