<?php
    
    #incluyo archivo de la clase vehiculo
    include("class/class.vehiculo.php");
    
    #creo un objeto de la clase vehiculo
    $vehiculo=new Class_vehiculo();
    
    #Establecer la matricula del vehiculo
    $vehiculo->matricula='6712HRM';
    
    #Establecer la velocidad del vehiculo
    $vehiculo->setvelocidad(10);
    
    echo"Matrícula: ".$vehiculo->getmatricula();
    echo "<br>";
    echo"Velocidad: ".$vehiculo->getvelocidad();