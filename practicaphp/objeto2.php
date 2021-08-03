<?php
#clase: es un modelo que se utiliza para crear objetos que compaten un mismo comportamiento
# estado e identidad.
// reocmendacion iniciar el nombre de las clases con la primera en mayusculas

class Automovil{

    #se crean las propiedades: caracteristicas que puede tener el objeto
    // propiedad publica
    public $marca;
    public $modelo;

    #metodo: algoritmo asociado al objeto que indica lo que se puede hacer
    // es parecido a las funciones

    public function mostrar(){
        echo "<p> Hola! soy un ". $this -> marca ," modelo " . $this-> modelo. "</p>";
        // para llamar la propiedad modelo se utiiza $this

    }
    
} 
#objeto: entidad provista de metodos o mensajes a los cuales responde propiedades con valores concretos

$a= new Automovil();
$a-> marca= "Toyota";
$a-> modelo= "Corolla";
$a->mostrar();

$b= new Automovil();
$b-> marca= "Hyundai";
$b-> modelo= "Acent Vision ";
$b->mostrar();

/* principios de poo que se cumplen:
Abstraccion:Nuevos tipos de datos ( el que tu quieras, tu lo creas)
Encapsulacion:Organizar el codigo en grupos logicos
Ocultamiento:ocultar detalles de implementacion y exponer solo los detalles necesarios para el resto del sistema
