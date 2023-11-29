<h1 class="page-header">Productos </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=vnetas&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Código Producto</th>
            <th style="width:120px;">Marca Producto</th>
            <th style="width:120px;">Nombre Producto</th>
            <th style="width:120px;">Precio Producto</th>
            <th style="width:120px;">Cantidad Producto</th>
            <th style="width:120px;">Información nutrimental</th>
            <th style="width:120px;">Porción Producto</th>
            <th style="width:120px;">Sellos</th>
            <th style="width:120px;">Ingredientes</th>
            <th style="width:120px;">ID Vendedor</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->MarcProducto; ?></td>
            <td><?php echo $r->NomProducto; ?></td>
            <td><?php echo $r->PrecioProducto; ?></td>
            <td><?php echo $r->cant_Producto; ?></td>
            <td><?php echo $r->info_Nutrimental; ?></td>
            <td><?php echo $r->Porcion_Producto; ?></td>
            <td><?php echo $r->Sellos; ?></td>
            <td><?php echo $r->Ingredientes; ?></td>
            <td><?php echo $r->id_Vendedor; ?></td>
            <td>
                <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
