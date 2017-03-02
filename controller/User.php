<?php
	
	/**
	 *
	 */
	require_once "CRUDS.php";
	require "../model/Model_user.php";

	class User implements CRUDS
	{
	    
	    private $id_user;
	    private $firstName;   
	    private $lastName;
	    private $birth;
	    private $cpf;
	    private $cnpj;
	    private $city;
	    private $state;
	    private $address;
	    private $number;
	    private $telephone;
	    private $email;
	    private $nickName;
	    private $password;
	    private $adm;

	    public function __construct()
	    {
	    	$this->setFirstName($_POST['firstName']);   
	    	$this->setLastName($_POST['lastName']);
	     	$this->setTelephone($_POST['tel']);
	     	$this->setEmail($_POST['email']);
	     	$this->setNickName($_POST['user']);
	     	$this->setPassword($_POST['password']);
	     	
	     	if(($this->getFirstName() != "") || ($this->getFirstName() != NULL)){
	     		$this->create();
	     	}
	     	else
	     	{
	     		$this->setNickName($_POST['nickName']);
	     		$this->setPassword($_POST['pass']);
	     		$this->login();
	     	}
	    }

	    public function create()
	    {
	        $bank = new Model_user();
	        $created = $bank->insert($this->getFirstName(),$this->getLastName(),$this->getTelephone(),$this->getEmail(),$this->getNickName(), $this->getPassword());
	        if(!$created)
	        {
	        	header("location:../view/public/login.php");
	        }
	        else
	        {
	        	header("location:../index.php");
	        }

	    }

	    
	    public function read()
	    {
	        // TODO: implement here
	    }

	    
	    public function update()
	    {
	        // TODO: implement here
	    }

	    
	    public function delete()
	    {
	        // TODO: implement here
	    }

	    
	    public function select($field,$search)
	    {
	        $bank = new Model_user();
	        $result = $bank->select($field,$search);
	        $this->setId_user($result[0]['id_user']);
	        $this->setFirstName($result[0]['firstName']);
	        $this->setLastName($result[0]['lastName']);
	        $this->setBirth($result[0]['birth']);
	        $this->setCpf($result[0]['cpf']);
	        $this->setCnpj($result[0]['cnpj']);
	        $this->setCity($result[0]['city']);
	        $this->setState($result[0]['state']);
	        $this->setAddress($result[0]['address']);
	        $this->setNumber($result[0]['number']);
	        $this->setTelephone($result[0]['telephone']);
	        $this->setEmail($result[0]['email']);
	        $this->setAdm($result[0]['adm']);
	    }

	    
	    public function logoff()
	    {
	        // TODO: implement here
	    }

	    
	    public function login()
	    {
	    	$bank = new Model_user();
	        $selected = $bank->selectUser($this->getNickName(),$this->getPassword());
	        if(!$selected)
	        {
	        	header("location:../view/public/login.php");
	        }
	        else
	        {
	        	$this->select("nickname",$this->getNickName());

	        	session_start("usuer");
	        	$_SESSION['id_user'] = $this->getId_user();
	        	$_SESSION['firstName'] = $this->getFirstName();
	        	$_SESSION['lastName'] = $this->getLastName();
	        	$_SESSION['birth'] = $this->getBirth();
	        	$_SESSION['cpf'] = $this->getCpf();
	        	$_SESSION['cnpj'] = $this-> getCnpj();
	        	$_SESSION['city'] = $this-> getCity();
	        	$_SESSION['state'] = $this->getState();
	        	$_SESSION['address'] = $this->getAddress();
	        	$_SESSION['number'] = $this->getNumber();
	        	$_SESSION['telephone'] = $this->getTelephone();
	        	$_SESSION['email'] = $this->getEmail();
	        	$_SESSION['nickname'] = $this->getNickName();
	        	$_SESSION['adm'] = $this->getAdm();
	        	if($this->getAdm()){
	        		header("location:../view/adm/index.php");
	        	}else{
	        		header("location:../index.php");
	        	}
	        	
	        }
	    }

	    
	    public function getId_user()
	    {
	    	return $this->id_user;
	    }

	    public function setId_user($id_user)
	    {
	    	$this->id_user = $id_user;
	    }

	    public function getFirstName()
	    {
	        return $this->firstName;
	    }
	    
	    public function setFirstName($firstName)
	    {
	        $this->firstName = $firstName;
	    }
	    
	    public function getLastName()
	    {
	        
	        return $this->lastName;
	    }
	    
	    public function setLastName($lastName)
	    {
	        $this->lastName = $lastName;
	    }
	    
	    public function getBirth()
	    {
	        return $this->birth;
	    }
	    
	    public function setBirth($birth)
	    {
	        $this->birth = $birth;
	    }
	    
	    public function getCpf()
	    {
	        return $this->cpf;
	    }

	    public function setCpf($cpf)
	    {
	        $this->cpf = $cpf;
	    }
	    
	    public function getCnpj()
	    {
	        return $this->cnpj;
	    }
	    
	    public function setCnpj($cnpj)
	    {
	        $this->cnpj = $cnpj;
	    }
	    
	    public function getCity()
	    {
	        return $this->city;
	    }
	    
	    public function setCity($city)
	    {
	        $this->city = $city;
	    }
	    
	    public function getState()
	    {
	        return $this->state;
	    }
	    
	    public function setState($state)
	    {
	        $this->state = $state;
	    }
	    
	    public function getAddress()
	    {
	        return $this->address;
	    }
	    
	    public function setAddress($address)
	    {
	        $this->address =$address;
	    }
	    
	    public function getNumber()
	    {
	        return $this->number;
	    }
	    
	    public function setNumber($number)
	    {
	        $this->number = $number;
	    }
	    
	    public function getTelephone()
	    {
	        return $this->telephone;
	    }
	    
	    public function setTelephone($telephone)
	    {
	        $this->telephone = $telephone;
	    }
	    
	    public function getEmail()
	    {
	        return $this->email;
	    }
	    
	    public function setEmail($email)
	    {
	        $this->email = $email;
	    }
	    
	    public function getNickName()
	    {
	        return $this->nickName;
	    }
	    
	    public function setNickName($nickName)
	    {
	        $this->nickName = $nickName;
	    }
	    
	    public function getPassword()
	    {
	        return $this->password;
	    }
	    
	    public function setPassword($password)
	    {
	        $this->password = $password;
	    }

	    public function getAdm()
	    {
	    	return $this->adm;
	    }

	    public function setAdm($adm)
	    {
	    	$this->adm = $adm;
	    }
	}
 
	$user = new User();
?>