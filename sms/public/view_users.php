<?php
require_once("../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
if($_SESSION['privilege']!="admin"){redirect_to("login.php");}
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
						<table id="tbl">
								<?php
								//echo "<h4>Name: </h4>"."<br/>";
								echo "<tr><td id='tda'>";
										echo "<h4>Name </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Staff ID </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Privilege </h4>"."<br/>"."</td>"."<td  id='tda'>";
										echo "<h4>Email </h4>"."<br/>"."</td><td  id='tda'>";
										//echo "<h4>NIC </h4>"."<br/>"."</td><td  id='tda'>";
								$arr=User::find_all();
                                
									foreach ($arr as $us){
										echo "<tr><td  id='tda'>";
										echo $us->name."</td>"."<td  id='tda'>";
										echo $us->staff_id."</td>"."<td id='tda'>";
										echo $us->privilege."</td>"."<td id='tda'>";
										echo $us->email."</td><td id='tda'>";
										//echo $us->nic."</td><td id='tda'>";
										$idn=$us->staff_id;
										echo "<a href='delete_user.php?id=$idn' class='button_example'>Unregister</a></td></tr>";
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