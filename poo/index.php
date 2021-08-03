<?php
require_once ('User.php');// se habla de un objeto cuando se llama
require_once('Connect.php');

$connect=new Connect;
$connect->init();
echo '<br><br>';

$id=random_int(1,1000);
$user=new User($id);// aqui estoy instanciando un objeto

/*$user->setName('Pepe');
$user->setLastName('Montero');


var_dump($user);

echo '<br><br>';
 var_dump($user->getFullName()); // de esta manera se muestra en el pantalla
 
 echo '<br><br>';*/

 $user->email='l@y.co';
 /*var_dump($user);
 echo '<br><br>';*/

 $userByEmail = $user->getByEmail($user->email);

foreach ($userByEmail as $key => $value) {
  var_dump($key);
  echo '<br><br>';
  var_dump($value);
}
echo '<br><br>';
var_dump($userByEmail);



