<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Código Producto</label>
      <input type="text" name="idProducto" value="<?php echo $prod->idProducto; ?>" class="form-control" placeholder="Ingrese Código Producto" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Marca Producto</label>
        <input type="text" name="MarcProducto" value="<?php echo $prod->MarcProducto; ?>" class="form-control" placeholder="Ingrese Marca del producto" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre Producto</label>
        <input type="text" name="NomProducto" value="<?php echo $prod->NomProducto; ?>" class="form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Precio Producto</label>
        <input type="text" name="PrecioProducto" value="<?php echo $prod->PrecioProducto; ?>" class="form-control" placeholder="Ingrese precio producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Cantidad del Producto</label>
        <input type="text" name="cant_Producto" value="<?php echo $prod->cant_Producto; ?>" class="form-control" placeholder="Ingrese cantidad producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Información nutrimental</label>
        <input type="text" name="info_Nutrimental" value="<?php echo $prod->info_Nutrimental; ?>" class="form-control" placeholder="Ingrese información nutrimental" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Porción producto</label>
        <input type="text" name="Porcion_Producto" value="<?php echo $prod->Porcion_Producto; ?>" class="form-control" placeholder="Ingrese porción por producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Sellos</label>
        <input type="text" name="Sellos" value="<?php echo $prod->Sellos; ?>" class="form-control" placeholder="Ingrese Sellos por producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Ingredientes del producto</label>
        <input type="text" name="Ingredientes" value="<?php echo $prod->Ingredientes; ?>" class="form-control" placeholder="Ingrese ingredientes por producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>ID Vendedor</label>
        <input type="text" name="id_Vendedor" value="<?php echo $prod->id_Vendedor; ?>" class="form-control" placeholder="Ingrese ID vendedor" data-validacion-tipo="requerido|min:3" />
    </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
