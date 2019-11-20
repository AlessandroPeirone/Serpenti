<?php
/**
 * Created by PhpStorm.
 * User: inf.peironea1109
 * Date: 11/11/2019
 * Time: 12:54
 *
 */
$cognome=$_REQUEST["Specie"];
$nome=$_REQUEST["Colore"];
$email=$_REQUEST["Lunghezza"];
$password=$_REQUEST["Ambiente"];
$marca=$_REQUEST["Specie"];
$modello=$_REQUEST["Colore"];
//optional è un checkbox
$optional=$_REQUEST["Caratteristiche"];
$debug=0;
if($debug){
    echo "Colore: ".$Colore."</br>";
    echo "Specie: ".$Specie."</br>";
    echo "Lunghezza: ".$Lunghezza."</br>";
    echo "Ambiente: ".$Ambiente."</br>";
    echo "Specie: ".$Specie."</br>";
    echo "Colore: ".$Colore."</br>";
    echo "Caratteristiche: ";
    foreach( $Caratteristiche as $car){
        echo $car.",";
    }
}

?>