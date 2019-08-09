<?php
include_once('../../ldatos/conexionbd.php');
header("Content-type:text/html; charset=utf8");
/**
 * 
 */
class Usuario extends conexion
{
	private $UsuNombre, $UsuApellido, $TipoDoc, $UsuNumDoc, $Rol, $UsuGen, $UsuEstado, $UsuCon;
	function __construct($UsuNombre,$UsuApellido,$TipoDoc,$UsuNumDoc,$Rol,$UsuGen,$UsuEstado,$UsuCon)
	{
		
		$this->UsuNombre = $UsuNombre;
		$this->UsuApellido = $UsuApellido;
		$this->TipoDoc = $TipoDoc;
		$this->UsuNumDoc = $UsuNumDoc;
		$this->Rol = $Rol;
		$this->UsuGen = $UsuGen;
		$this->UsuEstado = $UsuEstado;
		$this->UsuCon = $UsuCon;
	}

	public function BuscarTipoDoc($tipodocumento){
		$valor;
		$csql="SELECT tipodoc_id FROM tipo_documento where tipodoc_nombre = '$tipodocumento'";
		$conexion =$this->Open();
		$conexion->select_db($this->Bd) or die ('No se pudo seleccionar la base de datos');
		$resultado= $conexion->query($csql) or die ("Error en: $csql: ".mysql_error());
		foreach ($resultado as $key) {
			$valor = $key['tipodoc_id'];
		}
		return $valor;
	}

	public function BuscarNomTipoDoc($TipoDoc_ID){
		$csql="SELECT tipodoc_nombre FROM tipo_documento where tipodoc_id = '$TipoDoc_ID'";
		$conexion =$this->Open();
		$conexion->select_db($this->Bd) or die ('No se pudo seleccionar la base de datos');
		$resultado= $conexion->query($csql) or die ("Error en: $csql: ".mysql_error());
		return $resultado;
	}

	public function BuscarRol($Roles){
		$csql="SELECT rol_id FROM rol where rol_nombre = '$Roles'";
		$conexion =$this->Open();
		$conexion->select_db($this->Bd) or die ('No se pudo seleccionar la base de datos');
		$resultado= $conexion->query($csql) or die ("Error en: $csql: ".mysql_error());
		return $resultado;
	}

	public function Estado($Estado){
		if ($Estado == "Activo") {
			$Estado = 1;
		}else{
			$Estado = 0;
		}
		return $Estado;
	}

	public function InsertarRegistro(){
		$TipDocumento = BuscarTipoDoc($this->TipoDoc);
		$RolUsu = BuscarRol($this->Rol);
		$EstadoUsu = Estado($this->UsuEstado);
		$csql = "insert into usuarios values ('$this->UsuNombre','$this->UsuApellido','$TipDocumento','$this->UsuNumDoc','$RolUsu','$this->UsuGen',$EstadoUsu,$this->UsuCon)";
		$conexion = $this->Open();
		$conexion->select_db($this->Bd) or die('No se pudo seleccionar la base de datos');
		$resultado=$conexion->query($csql) or die("Error en: $csql: ".mysql_error());
		header('Location: index.php');
	}

	public function mostrartodo(){
		$csql = "select * from usuarios";
		$conexion = $this->Open();
		$conexion->select_db($this->Bd) or die('No pudo seleccionar la base de datos');
		$result= $conexion->query($csql) or die('Error en: $csql:'.mysql_error());
		echo "<table class='table tabla'>";
		echo "<thead class='thead-blue'>
              <tr>
                <th>Tipo de documento</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Estado</th>
                <th></th>
              </tr>
              
            </thead><tbody>";
			
			foreach ($result as $key) {
				echo "\t<tr>\n";
				echo "<td>".$key['tipodoc_id']."</td>\n";
				echo "<td>".$key['usuario_numdoc']."</td>\n";
				echo "<td>".$key['usuario_nombre']." ".$key['usuario_apellido']."</td>\n";
				echo "<td>".$key['rol_id']."</td>\n";
				// echo "<td>".$key['usuario_estado']."</td>\n";
				echo "<td><input type='button' name='crearuser' class='btn btn-outline-success' value='Activo'></td>\n";
				echo "<td><input type='button' name='crearuser' class='btn btn-outline-info' value='Editar'></td>\n";
				echo "\t</tr>\n";
			}
			
		echo "</tbody></table>";
	}
}