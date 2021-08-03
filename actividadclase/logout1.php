<?php
// de esta forma se cierra sesion
session_start();
session_unset ();
session_destroy ();
header("location:http://localhost/clases_php/atividadclase/login1.php");
?>