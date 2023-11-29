<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Vendedores">Vendedores</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-Vendedores" action="?c=Vendedores&a=Guardar" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label>ID del vendedor</label>
    <input type="number" name="id_Vendedor" class="form-control" value="<?php echo $pvd->id_Vendedor; ?>" />
</div>

<div class="form-group">
    <label>Nombre del vendedor</label>
    <input type="text" name="Nombre" value="<?php echo $pvd->Nombre; ?>" class="form-control" placeholder="Ingrese nombre del vendedor" />
</div>

<div class="form-group">
    <label>Apellidos</label>
    <input type="text" name="Apellidos" value="<?php echo $pvd->Apellidos; ?>" class="form-control" placeholder="Ingrese  los apellidos del vendedor"  />
</div>

<div class="form-group">
    <label>email</label>
    <input type="text" name="email" value="<?php echo $pvd->email; ?>" class="form-control" placeholder="Ingrese email vendedor"   />
</div>

<div class="form-group">
    <label>Contacto</label>
    <input type="text" name="contacto" value="<?php echo $pvd->contacto; ?>" class="form-control" placeholder="Ingrese contacto vendedor"   />
</div>

<div class="form-group">
    <label>RFC</label>
    <input type="text" name="RFC" value="<?php echo $pvd->RFC; ?>" class="form-control" placeholder="Ingrese RFC vendedor"   />
</div>

<div class="form-group">
    <label>Genero</label>
    <input type="text" name="Genero" value="<?php echo $pvd->Genero; ?>" class="form-control" placeholder="Ingrese Genero vendedor"   />
</div>

<div class="form-group">
    <label>Domicilio</label>
    <input type="text" name="Domicilio" value="<?php echo $pvd->Domicilio; ?>" class="form-control" placeholder="Ingrese Domicilio vendedor"   />
</div>


    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-Vendedores").submit(function(){
            return $(this).validate();
        });
    })
</script>
