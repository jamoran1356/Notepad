<div class="row">
    <div class="lg-8 md-8 container">


<form method="post">
			<div class="form-group">
				<label for="file">Selecciona un archivo:</label>
				<select class="form-control" name="file" id="file">
					<option value="">Selecciona un archivo</option>
					<?php
						$files = scandir(".");
						foreach($files as $file) {
							if(is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == "txt") {
								echo "<option value=\"$file\">$file</option>";
							}
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="content">Contenido:</label>
				<textarea class="form-control" name="content" id="content" rows="10"><?php echo isset($_POST["file"]) ? file_get_contents($_POST["file"]) : ""; ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
		<?php
			if(isset($_POST["file"]) && isset($_POST["content"])) {
				file_put_contents($_POST["file"], $_POST["content"]);
				echo "<div class=\"alert alert-success\">El archivo ha sido guardado correctamente.</div>";
			}
		?>
        </div>
</div>