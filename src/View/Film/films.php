<div class = "film">
<div id="body-content">
<fieldset>
                    <legend>Tous les Films</legend>
	<a href='/PiePHP/index.php/film/add' class='btn btn-warning btn-lg '>
		<span class='glyphicon glyphicon-plus-sign'></span> Ajouter un film
	</a>
	<form method = "POST">
	<div class="form-group">
        <label class="col-md-1 control-label" for="id_distrib">Titre</label>
          <div class="col-md-2">
                <input type="text" class="form-control" name="input_Titre">
         </div>
        </div>
	<div class="form-group">
		  <label class="col-md-1 control-label" for="id_genre">Genre</label>
		  <div class="col-md-2">
		    <select id="id_genre" name="id_genre" class="form-control">
		    	<option selected="" value="">Selectionnez un genre ...</option>
		    	<?php
		    		foreach ($genres as $genre) {
		    			echo "<option value='" . $genre['id_genre'] . "'>" .  $genre['nom'] . "</option>";
		    		}
		    	?>
		    </select>
		  </div>
		</div>

		<div class="form-group">
		<label class="col-md-1 control-label" for="id_distrib">Distributeur</label>
		  <div class="col-md-2">
		    <select id="id_distrib" name="id_distrib" class="form-control">
		    	<option selected="" value="">Selectionnez un distributeur ...</option>
		    	<?php
		    		foreach ($distribs as $distrib) {
		    			echo "<option value='" . $distrib['id_distrib'] . "'>" .  $distrib['nom'] . "</option>";
		    		}
		    	?>
		    </select>
		 </div>
		</div>
		<div class = "col-md-2">
		<button class = "btn log btn-lg" data-href= "PiePhp/film/films">Filtre</button>
		</div>
		</form>
	<table id="myTable" class="table table-responsive table-striped">
		<thead>
			<tr>
				<th>TITRE</th>
				<th>GENRE</th>
				<th>DISTRIBUTEUR</th>
				<th>HISTORIQUE FILM VU</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($movies as $movie) { ?>
				<tr>
		    		<td ><?php echo "<a href=\"show/" . $movie['id_film'] . "\">" . $movie['titre']; ?></a></td>
			    	<td><?php echo $movie['genre']; ?></td>
					<td><?php echo $movie['distrib']; ?></td>
					<td><a class = 'col-md-6' href="#"><span class = 'glyphicon glyphicon-plus'></span>Ajouter</a><a class = 'col-md-7' href="#"><span class = "glyphicon glyphicon-minus"></span>Supprimer</a></td>  
		   		</tr>
			<?php } ?>
		</tbody>
	</table>
	</fieldset>
</div>
</div>

