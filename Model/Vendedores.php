<?php
class vendedores
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto vendedores
    public $id_Vendedor;
    public $Nombre;
    public $Apellidos;
    public $email;
	public $contacto;
	public $RFC;
	public $Genero;
	public $Domicilio;

	//Método de conexión a SGBD.
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

	//Este método selecciona todas las tuplas de la tabla
	//vendedores en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM vendedores");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del vendedores a partir del id_Vendedor
	//utilizando SQL.
	public function Obtener($id_Vendedor)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id_Vendedor del vendedores.
			$stm = $this->pdo->prepare("SELECT * FROM vendedores WHERE id_Vendedor = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id_Vendedor.
			$stm->execute(array($id_Vendedor));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla vendedores dado un id_Vendedor.
	public function Eliminar($id_Vendedor)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM vendedores WHERE id_Vendedor = ?");

			$stm->execute(array($id_Vendedor));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el id_Vendedor del vendedores.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE vendedores SET Nombre = ?, Apellidos = ?, email = ?, contacto = ?, RFC = ?, Genero = ?, Domicilio = ? WHERE id_Vendedor = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre,
                        $data->Apellidos,
                        $data->email,
						$data->contacto,
						$data->RFC,
						$data->Genero,
						$data->Domicilio,
                        $data->id_Vendedor
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo vendedores a la tabla.
	public function Registrar(vendedores $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO vendedores (id_Vendedor, Nombre, Apellidos, email, contacto, RFC, Genero, Domicilio)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->id_Vendedor,
                    	$data->Nombre,
                        $data->Apellidos,
                        $data->email,
						$data->contacto,
						$data->RFC,
						$data->Genero,
						$data->Domicilio
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
