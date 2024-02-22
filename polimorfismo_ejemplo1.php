<?php

/*Ejemplo 1: Polimorfismo con la clase abstracta
Supongamos que tenemos una clase abstracta llamada "Animal" 
con un método llamado "hacerSonido". 
Esta clase define el comportamiento general de un
 animal, pero no puede ser instanciada directamente*/

abstract class Animal
{
    abstract public function hacerSonido();
}

class Perro extends Animal
{
    public function hacerSonido()
    {
        return "¡Guau!";
    }
}

class Gato extends Animal
{
    public function hacerSonido()
    {
        return "¡Miau!";
    }
}

$perro = new Perro();
echo $perro->hacerSonido(); // Output: ¡Guau!

$gato = new Gato();
echo $gato->hacerSonido(); // Output: ¡Miau!




