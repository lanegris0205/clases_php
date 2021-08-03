<?php
class User
{ // el archivo y la clase deben llevar el mismo nombre
  protected $connect;
  private $id;
  public $name;
  public $lastname;
  public $email;
  public $password;

  public function __construct(int $id)
  {
    $this->id=$id;
    $newConnect = new Connect;
    $this->connect = $newConnect->init();
  }

  // tenemos 5 propiedades en el objeto usuario aqui solo se a creado la clase

  public function setName(string $name) // metodo que se llama setname y le pasa un valor
  {
    $this->name = $name; // se esta hablando de una propiedad del objeto por tal motivo no se coloca el $
  }
  public function setLastName(string $lastname) // metodo que se llama setname y le pasa un valor
  {
    $this->lastname = $lastname; // se esta hablando de una propiedad del objeto por tal motivo no se coloca el $
  }

  public function getFullName()
  {
    return $this->name.'  '.$this->lastname;// de esta manera podemos hacer return el fullName
  }

  public function getByEmail(string $email)
  {
    $sql = "SELECT * FROM usuariologin WHERE email='$email'";

    return $this->connect->query($sql);
  }

  public function __destruct() 
  {
    echo '<br><br>';
    echo ' Se termino el objeto User';
  }
}
