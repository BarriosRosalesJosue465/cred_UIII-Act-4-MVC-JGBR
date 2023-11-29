<?php
class Productos

{
	private $pdo;

    public $idProducto;
    public $MarcProducto;
    public $NomProducto;
    public $PrecioProducto;
    public $cant_Producto;
	public $info_Nutrimental;
	public $Porcion_Producto;
	public $Sellos;
	public $Ingredientes;
	public $id_Vendedor;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM Productos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idProducto)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM Productos WHERE idProducto = ?");
			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idProducto)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Productos WHERE idProducto = ?");

			$stm->execute(array($idProducto));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE Productos SET MarcProducto = ?, NomProducto = ?, PrecioProducto = ?, cant_Producto = ?, info_Nutrimental = ?, Porcion_Producto = ?, Sellos = ?, Ingredientes = ?, id_Vendedor = ? WHERE idProducto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->MarcProducto,
                        $data->NomProducto,
                        $data->PrecioProducto,
						$data->cant_Producto,
						$data->info_Nutrimental,
						$data->Porcion_Producto,
						$data->Sellos,
						$data->Ingredientes,
						$data->id_Vendedor,
                        $data->idProducto
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Productos $data)
	{
		try
		{
		$sql = "INSERT INTO Productos (idProducto, MarcProducto, NomProducto, PrecioProducto, cant_Producto, info_Nutrimental, Porcion_Producto, Sellos, Ingredientes, id_Vendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->idProducto,
                    	$data->MarcProducto,
                        $data->NomProducto,
                        $data->PrecioProducto,
						$data->cant_Producto,
						$data->info_Nutrimental,
						$data->Porcion_Producto,
						$data->Sellos,
						$data->Ingredientes,
						$data->id_Vendedor
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
