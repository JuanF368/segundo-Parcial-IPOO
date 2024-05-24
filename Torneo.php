<?php


class Torneo{
    private $colPartidos;
    private $importePremio;

    //constructor

    public function __construct($colPartidos, $importePremio){
        $this->colPartidos=$colPartidos;
        $this->importePremio=$importePremio;
    }


    //metodos de acceso

    public function getColPartidos(){
        return $this->colPartidos;
    }
    public function getImportePremio(){
        return $this->importePremio;
    }


    public function setColPartidos($newColPartidos){
        $this->colPartidos=$newColPartidos;
    }
    public function setImportePremio($newImportePremio){
        $this->importePremio=$newImportePremio;
    }


    //metodo toString
    public function __toString(){
        $cadenaPartido = "";
        $arrayPartidos=$this->getColPartidos();

        foreach ( $arrayPartidos as $partidos){
            $cadenaPartido=$cadenaPartido.$partidos."\n";
        }

        return
        "Partidos: ".$cadenaPartido."\n".
        "Premio: ".$this->getImportePremio()."\n";
    }

    public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido){
        if($OBJEquipo1->getCantJugadores==$OBJEquipo2->getCantJugadores && $OBJEquipo1->getObjCategoria==$OBJEquipo2->getObjCategoria){
            $colPartidos=$this->getColPartidos();
            $objPartido=[$OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido];
            array_push($colPartidos, $objPartido);
            $this->setColPartidos($colPartidos);
            $estado=1;
        }else{
            $estado=-1;
        }
        return $estado; //pienso usar el estado en el futuro para imprimir si se pudo meter el partido a la coleccion o si el partido no es valido
    }


    public function darGanadores($deporte){
        $colGanadores =[];
        $colPartidos=$this->getColPartidos();
        if($deporte=="futbol"){
            foreach ($colPartidos as $partido){
                if ($partido instanceof Futbol){
                    $ganador = $partido->darEquipoGanador();
                    array_push($colGanadores, $ganador);
                }
            }
        }elseif($deporte=="basket"){
            foreach ($colPartidos as $partido){
                if ($partido instanceof Basket){
                    $ganador = $partido->darEquipoGanador();
                    array_push ($colGanadores, $ganador);
                }
            }
        }
        return $colGanadores;
    }
}