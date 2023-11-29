<h1 class="page-header">
    <?php echo $pvd->id_Vendedor != null ? $pvd->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=vendedores">Vendedores</a></li>
  <li class="active"><?php echo $pvd->id_Vendedor != null ? $pvd->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-vendedores" action="?c=vendedores&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_Vendedor" value="<?php echo $pvd->id_Vendedor; ?>" />

    <div class="form-group">
        <label>Nombre del vendedor</label>
        <input type="text" name="Nombre" value="<?php echo $pvd->Nombre; ?>" class="form-control" placeholder="Ingrese nombre del vendedor" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="Apellidos" value="<?php echo $pvd->Apellidos; ?>" class="form-control" placeholder="Ingrese  los apellidos del vendedor" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" value="<?php echo $pvd->email; ?>" class="form-control" placeholder="Ingrese email vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Contacto</label>
        <input type="text" name="contacto" value="<?php echo $pvd->contacto; ?>" class="form-control" placeholder="Ingrese contacto vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>RFC</label>
        <input type="text" name="RFC" value="<?php echo $pvd->RFC; ?>" class="form-control" placeholder="Ingrese RFC vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Genero</label>
        <input type="text" name="Genero" value="<?php echo $pvd->Genero; ?>" class="form-control" placeholder="Ingrese Genero vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Domicilio</label>
        <input type="text" name="Domicilio" value="<?php echo $pvd->Domicilio; ?>" class="form-control" placeholder="Ingrese Domicilio vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-vendedores").submit(function(){
            return $(this).validate();
        });
    })
</script>
