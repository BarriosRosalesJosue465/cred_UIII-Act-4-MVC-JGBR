<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/Vendedores.php';

class VendedoresController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new Vendedores();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/Vendedores/Vendedores.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista Vendedores-editar
    public function Crud(){
        $pvd = new Vendedores();

        //Se obtienen los datos del Vendedores a editar.
        if(isset($_REQUEST['id_Vendedor'])){
            $pvd = $this->model->Obtener($_REQUEST['id_Vendedor']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/Vendedores/Vendedores-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista Vendedores-nuevo
    public function Nuevo(){
        $pvd = new Vendedores();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/Vendedores/Vendedores-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo Vendedores.
    public function Guardar(){
        $pvd = new Vendedores();

        //Captura de los datos del formulario (vista).
        $pvd->id_Vendedor = $_REQUEST['id_Vendedor'];
        $pvd->Nombre = $_REQUEST['Nombre'];
        $pvd->Apellidos = $_REQUEST['Apellidos'];
        $pvd->email = $_REQUEST['email'];
        $pvd->contacto = $_REQUEST['contacto'];
        $pvd->RFC = $_REQUEST['RFC'];
        $pvd->Genero = $_REQUEST['Genero'];
        $pvd->Domicilio = $_REQUEST['Domicilio'];

        //Registro al modelo Vendedores.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php');
    }

    //Método que modifica el modelo de un Vendedores.
    public function Editar(){
        $pvd = new Vendedores();

        $pvd->id_Vendedor = $_REQUEST['id_Vendedor'];
        $pvd->Nombre = $_REQUEST['Nombre'];
        $pvd->Apellidos = $_REQUEST['Apellidos'];
        $pvd->email = $_REQUEST['email'];
        $pvd->contacto = $_REQUEST['contacto'];
        $pvd->RFC = $_REQUEST['RFC'];
        $pvd->Genero = $_REQUEST['Genero'];
        $pvd->Domicilio = $_REQUEST['Domicilio'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    //Método que elimina la tupla Vendedores con el id_Vendedor dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_Vendedor']);
        header('Location: index.php');
    }
}
