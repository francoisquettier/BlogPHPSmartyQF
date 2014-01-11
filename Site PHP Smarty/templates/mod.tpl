<body>
				<form action="mod_traitement.php" method="POST"enctype="multipart/form-data">>
				<div class="clearfix">
				<label for="titre">Titre</label>
				<div class="impact"><input type="text" name="titre" id="titre" value="{$titre}" /></div>
			</div>
			
			<div class="clearfix">
				<label for="text">Texte</label>
				<div class="impact"><textarea name="corps" id="corps" >{$corps}</textarea></div>
			</div>
			
			<div class="clearfix">
				<label for="checkbox">Publication</label>
				<div class="impact"><input type="checkbox" name="statut" id="statut" value="{$statut}"></div>
			</div>
			
			<label for="text"> Fichier :</label><br />
			<input type="file" id="datafile" name="datafile" size="40">
								
				<input type="hidden" name="id" id="id" value="{$id}" >
				<br>

			<div class="form-action">
				<input type="submit" name="Modifier" value="Modifier"/>
			</div>
			</form>
</body>