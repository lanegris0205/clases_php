<?php
// session_start();
require_once ('Database1.php');
class Usuario
{
    protected $database;
    private $id;
    public $email;
    public $password;

    public function __construct()
    {
        session_start();
       
    }

    public function validar($email,$password)
    {
        $newDatabase = new Database1();
        $database = $newDatabase->init();
        $query = $database->prepare("SELECT * FROM usuariologin
        WHERE email = :email AND password = :password");
        $query->bindParam(":email", $email);
        $query->bindParam(":password", $password);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        //echo($usuario['']);
        if ($usuario) {
            $_SESSION['email'] = $usuario["email"];
            header("location:http://localhost\clases_php\login_mysql\iniciosql.php");
        } else {
            $msg = "Email o contraseña no validos";
            $aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);
            $pahtOrigin = $aPahtOrigin[0];
            //var_dump($aPahtOrigin);
            header("Location: $pahtOrigin?msg=$msg");
        }
    }

    function cerrarsesion()
    {
        session_unset();
        session_destroy();
        header("location:http://localhost\clases_php\login_mysql\loginsql.php");
    }
}
