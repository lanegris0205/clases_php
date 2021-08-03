<?php
// session_start();
class Sesionpoo
{
    private $id;
    public $email;
    public $password;

    public function __construct()
    {
        session_start();
    
    }

    public function validar($id,$email,$password)
    {
        if ($email === 'a@a.co' && $password === '1234') {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = random_int(1, 1000);
            header("location:http://localhost\clases_php\loginpoo\iniciopoo.php");
        } else {
            $msg = "Email o contraseña no validos";
            $aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);
            $pahtOrigin = $aPahtOrigin[0];
            var_dump($aPahtOrigin);
            header("Location: $pahtOrigin?msg=$msg");
        }
    }

    function cerrarsesion()
    {
        session_unset();
        session_destroy();
        header("location:http://localhost\clases_php\loginpoo\loginpoo.php");
    }
}

