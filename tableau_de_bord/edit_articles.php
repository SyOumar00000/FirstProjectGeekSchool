<?php
$userID = $_GET['uID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM articles where id = '$userID'";
	$result = mysqli_query($conn, $sql);
	$vv = mysqli_fetch_assoc($result);

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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Articles</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_articles.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nom:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="nom" id="focusedInput" type="text" placeholder="Nom Article" 
								  value="<?php echo $vv['nom']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Prix</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="prixUnitaire" id="focusedInput" type="text" placeholder="Description Article"
								  value="<?php echo $vv['prixUnitaire']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Image:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="image" id="focusedInput" type="image" placeholder="Photo Article"
								  value="imageSenegal/<?php echo $vv['image']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Auteur</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="auteur" id="focusedInput" type="text" placeholder=""
								  value="<?php echo $vv['auteur']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contenu:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="content" id="focusedInput" type="text" placeholder=""
								  value="<?php echo $vv['content']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Statuts:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="actif" id="focusedInput" type="number" placeholder="Statut Article"
								  value="<?php echo $vv['actif']; ?>">
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