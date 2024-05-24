<?php


class Basket extends Partido{
    private $infracciones;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2, $infracciones){
        //invocamos al construct padre
        parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        //agregamos el nuevo atributo
        $this->infracciones=$infracciones;
    }
}