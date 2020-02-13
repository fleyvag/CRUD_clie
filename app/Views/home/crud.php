<h2 class="page-header"></h2>
<form method="post" action="?c=home&a=guardar">
<div class="form-group">
	<input type="hidden" name="id"  value="<?php echo $nuevo ? '':$model->id_clie; ?>">
	<label for="">Nombre</label>
	<input type="text" name="nombre" class="form-control" value="<?php echo $nuevo ? '':$model->nom_clie; ?>">
</div>
<div class="form-group">
	<label for="">Apellidos</label>
	<input type="text" name="apellido" class="form-control" value="<?php echo $nuevo ? '':$model->ape_clie; ?>">
</div>
<div class="form-group">
	<label for="">telefono</label>
	<input type="number" name="telefono" class="form-control" value="<?php echo $nuevo ? '':$model->telefono; ?>">
</div>

<button type="submit" class="btn btn-primary"> Guardar</button>
</form>