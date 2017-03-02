<?php

	/**
	* 
	*/
	require 'Connection.php';
	require '../config.php';
	class Model_user
	{

		/**
		* Função responsável pro inserir dos cadastro do novo usuário no banco de dados.
		*/
		public function insert ($firstName,$lastName,$telephone,$email,$nickName,$password)
		{
			if($this->checkingForExistence("nickname",$nickName))
			{
				/**
				* Criando uma sessão para poder armazenar a mensagem de erro caso ele tente cadastrar um usuário que já tenha sido
				* cadastrado e a mensagem será exibida quando a página em que o usuário está sendo redirecionada carregar.
				*/
				session_start("menssages");
				$_SESSION['message'] = "Nome de usuário já existente!";
				$_SESSION['type'] = "danger";
				return false;
			}
			else if($this->checkingForExistence("email",$email))
			{
				/**
				* Criando uma sessão para poder armazenar a mensagem de erro caso ele tente cadastrar um e-mail que já foi
				* cadastrado e a mensagem será exibida quando a página em que o usuário está sendo redirecionada carregar.
				*/
				session_start("menssages");
				$_SESSION['message'] = "E-mail de usuário já cadastrado!";
				$_SESSION['type'] = "danger";
				return false;
			}
			else
			{
				try
				{	
					/**
					* Aqui ele tenta inserir o novo cadastro no banco de dados e caso tudo dê certo ele cria uma sessão para poder
					* armazenar a mensagem de sucesso ao tentar cadastrar o novo usuário.
					*/
					$sql = "INSERT INTO `users` (id_user, firstName, lastName, telephone, email, nickname, password) 
							VALUES (NULL, '{$firstName}', '{$lastName}', '{$telephone}', '{$email}', '{$nickName}',
						'{$password}')";
					$this->execute($sql);
					session_start("menssages");
					$_SESSION['message'] = "Usuário criado com sucesso!";
					$_SESSION['type'] = "success";
					return true;
				}
				catch (Exception $e) { 
    				echo "Erro de inserção!".$e.getMessage();
    				return false;
  				}
			}
			 
		}


		/**
		* Função responsável por checar se um e-mail ou usuário não está sendo cadastrado duas vezes
		*/
		public function checkingForExistence($field,$search)
		{
			try
			{
				$sql = "SELECT * FROM `users` WHERE {$field} LIKE '{$search}'";
				$result = $this->execute($sql);
				if(!mysqli_num_rows($result))
				{
					return false;
				}
				else
				{
					while($res = mysqli_fetch_assoc($result))
					{
						$data[] = $res;
					}
					return true;
				}
			}catch(Exception $e) { 
    			echo "Erro:".$e.getMessage();
    			return true;
  			} 
		}

		/**
		* Função responsável por checar se o usuário e a senha estão corretas para que o usuário possa acessar seus dados.
		*/
		public function selectUser($nickName, $password)
		{
			try
			{
				$sql = "SELECT * FROM `users` WHERE nickname LIKE '{$nickName}' AND password LIKE '{$password}'";
				$result = $this->execute($sql);
				if(!mysqli_num_rows($result))
				{
					session_start("menssages");
					$_SESSION['message'] = "Usuário ou senha estão incorretas!";
					$_SESSION['type'] = "danger";
					return false;
				}
				else
				{
					while($res = mysqli_fetch_assoc($result))
					{
						$data[] = $res;
					}
					session_start("menssages");
					$_SESSION['message'] = "Usuário autenticado com sucesso!";
					$_SESSION['type'] = "success";
					return true;
				}
			}catch(Exception $e) { 
    			echo "Erro:".$e.getMessage();
    			return false;
  			} 
		}
		
		/**
		* Função responsável buscar todos os dados do usuário logado.
		*/
		public function select($field,$search)
		{
			try
			{
				$sql = "SELECT * FROM `users` WHERE {$field} LIKE '{$search}'";
				$result = $this->execute($sql);
				if(!mysqli_num_rows($result))
				{
					return null;
				}
				else
				{
					while($res = mysqli_fetch_assoc($result))
					{
						$data[] = $res;
					}
					return $data;
				}
			}catch(Exception $e) { 
    			echo "Erro:".$e.getMessage();
    			return null;
  			} 
		}

		/**
		* Função responsável por executar todos os comandos de query no banco.
		*/
		public function execute($query)
		{
			$con = new Connection();
			$conn = $con->connection();

			$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

			$con->desconnect($conn);
			return $result;
		}
	}
?>