<?php 
	class conexion
	{
		protected $server='localhost';
		protected $user='root';
		protected $passw='';
		protected $Bd='practicaue';

		public function Open(){
			try
			{
				$link = mysqli_connect($this->server, $this->user, $this->passw) or die("No se pudo conectar a la base de datos");
				echo 'Conexion exitosa a la base de datos';
				return $link;
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
				return null;
			}
		}
	}
 ?>