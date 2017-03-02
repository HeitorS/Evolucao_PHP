<?php

	class Connection 
	{
	 	private $conn;

		public function connection()
		{
			try
			{
				$conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
				return $conn;
			}
			catch (Exception $e)
			{
				echo "Erro {$e->getMessage()}";
				return null;
			}
		}

		public function desconnect($conn)
		{
			mysqli_close($conn) or die(mysqli_error($conn));
		}

	}
?>
	