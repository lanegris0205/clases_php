<?php
session_start();
//require_once ('Usermodel.php');// se agrego nuevo
 session_start();
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

//$user=new User;// se agrego nuevo

//if ($user->login($email, $password))
if ($$email==='a@a.co' && $password==='1234'){// se agrego nuevo

  $_SESSION['email']=$email;
  $_SESSION['id']=random_int(1,1000);
  //var_dump($_SESSION);
  header("location:http://localhost/clases_php/atividadclase/inicio1.php");

}else{
$msg= "Las credenciales ingresadas no coinciden";
$aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);
$pahtOrigin=$aPahtOrigin[0];
var_dump($aPahtOrigin);
header("Location: $pahtOrigin?msg=$msg");
}
?>

