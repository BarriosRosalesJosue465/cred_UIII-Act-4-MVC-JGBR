<h1 class="page-header">Vendedores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Vendedores&a=Nuevo">Nuevo Vendedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID Vendedor</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Apellidos</th>
            <th style="width:120px;">email</th>
            <th style="width:120px;">contacto</th>
            <th style="width:120px;">RFC</th>
            <th style="width:120px;">Genero</th>
            <th style="width:120px;">Domicilio</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_Vendedor; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Apellidos; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->contacto; ?></td>
            <td><?php echo $r->RFC; ?></td>
            <td><?php echo $r->Genero; ?></td>
            <td><?php echo $r->Domicilio; ?></td>
            <td>
                <a href="?c=Vendedores&a=Crud&id_Vendedor=<?php echo $r->id_Vendedor; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Vendedores&a=Eliminar&id_Vendedor=<?php echo $r->id_Vendedor; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
