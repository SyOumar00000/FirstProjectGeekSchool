<?php
$userID = $_GET['uID'];
	include('includes/connection.php');
	$sql ="SELECT * FROM users where id = '$userID'";
	$resultats = mysqli_query($conn, $sql);
	$vv = mysqli_fetch_assoc($resultats);
?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="username" id="focusedInput" type="text" placeholder="Username" 
								  value="<?php echo $vv['username']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="password" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $vv['password']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="email" id="focusedInput" type="email" placeholder="Email"
								  value="<?php echo $vv['email']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">avatar</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="avatar" id="focusedInput" type="text" placeholder="Avatar"
								  value="<?php echo $vv['avatar']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">status</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="status" id="focusedInput" type="text" placeholder="Status"
								  value="<?php echo $vv['status']; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="hid" value="<?php echo $autoid; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->