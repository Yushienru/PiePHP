<div id="body-content">
	<fieldset class="container">
		<legend>Tous les Genres</legend>
		<form method="POST">
			<input type="text" name="add">
			<button type="submit" class="btn btn-warning">Ajouter un genre</button>
		</form>
		<ul class = "list-genre row">
			<?php foreach ($genres as $genre) { ?>
				<li class="genre-list col-sm-4">
					<div>
						<?php echo ucfirst($genre['nom']); ?>

						<form method="POST">
							<input type="hidden" name="id" value=<?php echo "\"" . $genre['id_genre'] . "\""; ?>>
							<input type="text" name="nom" value=<?php echo "\"" . $genre['nom'] . "\""; ?>>
							<button type="submit" class="btn btn-success">Modifier</button>
						</form>
						<form method="POST">
							<input type="hidden" name="delete" value=<?php echo "\"" . $genre['id_genre'] . "\""; ?>>
							<button type="submit" class="btn btn-danger">Supprimer</button>
						</form>
					</div>
				</li>
			<?php } ?>
		</ul>
	</fieldset>
</div>