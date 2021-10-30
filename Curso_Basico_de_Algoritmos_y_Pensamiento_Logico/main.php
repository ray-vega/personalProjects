<?php
function placesRecommendation($condition = '', $question = '') {
    $weather = array("Bogota" => "cold", "Monteria" => "hot", "Medellin" => "mild")
    $ubicacion =array("Guajira" => "north", "Leticia" => "south", 
    "Santander" => "east", "Antioquia" => "west");
    $tourisn = array("Santa Marta" => "sea", "Villavicencia" => "plains", "Riohacha" => "desert", "Quindio" => "valley");

    switch($condition) {
        case "weather":
            $search = $weather;
        break;
        case "ubication":
            $search = $ubicacion;
        break;
        case "tourisn":
            $search = $tourisn;
        break;
        default:
            echo "Welcome to Colombia";

    }
    echo "The perfect place for you is ".array_search($question, $search)
}
placesRecommendation("weather", "cold"):