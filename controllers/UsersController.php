<?php 

class UsersController extends Controller
{
	private $user;

	public function __construct()
	{
		$this->user = new User();
	}

	public function index()
	{
		usleep(5000000);
		$values = array("users" => $this->user->getUsers());
		$this->loadTemplate("Users", $values);	
	}

	public function add()
	{
		if (!empty($_POST["id"])) {
			$this->user->setName(addslashes($_POST["nome"]));
			$this->user->setPhone(addslashes($_POST["telefone"]));
			$this->user->setDate(addslashes($_POST["data_nascimento"]));
			$this->user->setAddress(addslashes($_POST["endereco"]));
			
			if ($this->user->update($_POST["id"])) {
				header("Location: " . URL . "users");	
			} else {
				header("Location: " . URL);
			}
		}
		else if ( !empty($_POST["nome"]) && !empty($_POST["email"]) ) {
			$this->user->setName(addslashes($_POST["nome"]));
			$this->user->setEmail(addslashes($_POST["email"]));
			$this->user->setPhone(addslashes($_POST["telefone"]));
			$this->user->setDate(addslashes($_POST["data_nascimento"]));
			$this->user->setAddress(addslashes($_POST["endereco"]));
			
			if ( $this->user->save() ) {
				header("Location: " . URL . "users");	
			} else {
				header("Location: " . URL . "?error=error");
			}
		}
	}

	public function edit($id) {
		$values = array("user" => $this->user->getUser($id));
		$this->loadTemplate("Edit", $values);
	}

	public function delete($id) {
		$this->user->deleteUser($id);
		header("Location: " . URL . "users");
	}
}
