<?php
require_once 'model/producto.php';

class ProductoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Productos();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new Productos();

        if(isset($_REQUEST['idProducto'])){
            $prod = $this->model->Obtener($_REQUEST['idProducto']);
        }

        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new Productos();

        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new Productos();

        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->MarcProducto = $_REQUEST['MarcProducto'];
        $prod->NomProducto = $_REQUEST['NomProducto'];
        $prod->PrecioProducto = $_REQUEST['PrecioProducto'];
        $prod->cant_Producto = $_REQUEST['cant_Producto'];
        $prod->info_Nutrimental = $_REQUEST['info_Nutrimental'];
        $prod->Porcion_Producto = $_REQUEST['Porcion_Producto'];
        $prod->Sellos = $_REQUEST['Sellos'];
        $prod->Ingredientes = $_REQUEST['Ingredientes'];
        $prod->id_Vendedor = $_REQUEST['id_Vendedor'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto');
    }

    public function Editar(){
        $prod = new Productos();

        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->MarcProducto = $_REQUEST['MarcProducto'];
        $prod->NomProducto = $_REQUEST['NomProducto'];
        $prod->PrecioProducto = $_REQUEST['PrecioProducto'];
        $prod->cant_Producto = $_REQUEST['cant_Producto'];
        $prod->info_Nutrimental = $_REQUEST['info_Nutrimental'];
        $prod->Porcion_Producto = $_REQUEST['Porcion_Producto'];
        $prod->Sellos = $_REQUEST['Sellos'];
        $prod->Ingredientes = $_REQUEST['Ingredientes'];
        $prod->id_Vendedor = $_REQUEST['id_Vendedor'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=producto');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idProducto']);
        header('Location: index.php');
    }
}
