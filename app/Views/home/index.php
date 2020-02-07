<h2 class="page-header">Empleados</h2>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="info">
            <th style="width:100px;">Id</th>
            <th style="width:100px;">Nombre</th>
            <th style="width:100px;">Apellido</th>
            <th style="width:100px;">Telefono</th>

        </tr>
    </thead>
    <tbody>
        <?php if(count($model) > 0): ?>
        <?php foreach($model as $m): ?>
        
        <tr>
            <td><?php echo $m->id_clie; ?></td>
            <td><?php echo $m->nom_clie; ?></td>
            <td><?php echo $m->ape_clie; ?></td>
            <td><?php echo $m->telefono; ?></td>
            
        </tr>

        <?php endforeach; ?>   
        <?php endif; ?>
    </tbody>
</table>