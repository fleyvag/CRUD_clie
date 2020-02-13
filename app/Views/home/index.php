<h2 class="page-header">Empleados</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr class="info">
            
            <th style="padding-left:30px;">Nombre</th>
            <th style="width:80px;">Telefono</th>
            

        </tr>
    </thead>
    <tbody>
        <?php if(count($model) > 0): ?>
        <?php foreach($model as $m): ?>
        
        <tr>
            <td style="padding-left:30px;">
            <a href="?c=home&a=crud&id=<?php echo $m->id_clie ?>">
                <?php echo $m->nom_clie; ?><?php echo ' ' ?><?php echo  $m->ape_clie; ?>
                
            </a>
            </td>
            <td><?php echo $m->telefono; ?></td>
            
        </tr>

        <?php endforeach; ?>   
        <?php endif; ?>
    </tbody>
</table>