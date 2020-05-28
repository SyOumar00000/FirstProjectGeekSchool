 <?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Ajouter Nouveau</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_articles.php"  enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">nom:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="nom" id="focusedInput" type="text" placeholder="nom de l'article">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">description:</label>
								<div class="controls">
								<textarea id="story" name="content" rows="5" cols="33"></textarea>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">photo:</label>
								<div class="controls">
								<input type="file" name="image" id="image" ><br>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">prix:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="prixUnitaire" id="focusedInput" type="number" placeholder="prix">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">statuts:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="actif" id="focusedInput" type="number" placeholder="publié(1) or non publié(0)">
								</div>
							  </div>

							  
							  
							  
							  
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add Articles</button>
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