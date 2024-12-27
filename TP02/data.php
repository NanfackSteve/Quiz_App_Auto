<?php 

    /* Ce script PHP a été écrit par Victorien Fotso */

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $description = array(
            "01.png" => "Danger permanant.",
            "02.png" => "Danger temporaire.",
            "03.png" => "Céder le passage aux véhicules arivants à votre droite.",
            "04.png" => "Virage à droite.",
            "05.png" => "Virage à gauche.",
            "06.png" => "Cassis ou dos-d'âne.",
            "07.png" => "Risque de chute de pierres.",
            "08.png" => "Descente dangereuse.",
            "09.png" => "Chaussée rétrécie.",
            "10.png" => "Passage pour piétons.",
            "11.png" => "Passage pour piétons.",
            "12.png" => "Station d'arrêt de bus.",
            "13.png" => "Circulation à sens unique.",
            "14.png" => "Impasse ou rue sans issue.",
            "15.png" => "Début d'une section d'autoroute.",
            "16.png" => "Fin d'une section d'autoroute.",
            "17.png" => "Ralentisseur.",
            "18.png" => "Station de taxis.",
            "19.png" => "Entrée d'aire piétonne.",
            "20.png" => "Lieu aménagé pour le stationnement : Parking.",
            "21.png" => "Sens interdit.",
            "22.png" => "Interdiction de dépasser tout véhicule à moteur sauf deux roues.",
            "23.png" => "Arrêt et stationnement interdits.",
            "24.png" => "Accès interdit aux piétons.",
            "25.png" => "Accès interdit aux véhicules de transport en commun.",
            "26.png" => "Accès interdit aux cyclistes.",
            "27.png" => "Signaux sonores interdits.",
            "28.png" => "Stationnement interdit.",
            "29.png" => "Interdiction de faire demi-tour.",
            "30.png" => "Accès interdit aux véhicules transportant des marchandises.",
            "31.png" => "Obligation de tourner à gauche avant le panneau.",
            "32.png" => "Obligation de tourner à droite avant le panneau.",
            "33.png" => "Direction obligatoire à la prochaine intersection : tout droit.",
            "34.png" => "Vitesse minimale obligatoire.",
            "35.png" => "Entrée d'aire piétonne.",
            "36.png" => "Voie réservée aux véhicules des services réguliers de transport en commun.",
            "37.png" => "Sortie d'aire piétonne.",
            "38.png" => "Fin de vitesse minimale obligatoire.",
            "39.png" => "Direction obligatoire à la prochaine intersection : à gauche.",
            "40.png" => "Direction obligatoire à la prochaine intersection : à gauche ou à droite.",
        );

        $categories = array(
            "01.png" => "Danger",
            "02.png" => "Danger",
            "03.png" => "Danger",
            "04.png" => "Danger",
            "05.png" => "Danger",
            "06.png" => "Danger",
            "07.png" => "Danger",
            "08.png" => "Danger",
            "09.png" => "Danger",
            "10.png" => "Danger",
            "11.png" => "Indication",
            "12.png" => "Indication",
            "13.png" => "Indication",
            "14.png" => "Indication",
            "15.png" => "Indication",
            "16.png" => "Indication",
            "17.png" => "Indication",
            "18.png" => "Indication",
            "19.png" => "Indication",
            "20.png" => "Indication",
            "21.png" => "Interdiction",
            "22.png" => "Interdiction",
            "23.png" => "Interdiction",
            "24.png" => "Interdiction",
            "25.png" => "Interdiction",
            "26.png" => "Interdiction",
            "27.png" => "Interdiction",
            "28.png" => "Interdiction",
            "29.png" => "Interdiction",
            "30.png" => "Interdiction",
            "31.png" => "Obligation",
            "32.png" => "Obligation",
            "33.png" => "Obligation",
            "34.png" => "Obligation",
            "35.png" => "Obligation",
            "36.png" => "Obligation",
            "37.png" => "Obligation",
            "38.png" => "Obligation",
            "39.png" => "Obligation",
            "40.png" => "Obligation",
        );

        $images = array_keys($description);
        $propositions = array_values($description);

        header('Content-Type: application/json; charset=utf-8');

        if($_GET['data'] == "images") {
            echo json_encode(array("images" => $images), JSON_PRETTY_PRINT);
        }

        else if($_GET['data'] == "propositions") {
            echo json_encode(array("propositions" => $propositions), JSON_PRETTY_PRINT);
        }

        else if($_GET['data'] == "categories") {
            echo json_encode(array("categories" => ["Danger", "Indication", "Interdiction", "Obligation"]), JSON_PRETTY_PRINT);
        }

        else if($_GET['data'] == "response") {
            if(!is_null($categories[$_GET['image']])) {
                $output = array(
                    "image" => $_GET['image'],
                    "category" => $categories[$_GET['image']],
                    "description" => $description[$_GET['image']],
                );
                echo json_encode($output, JSON_PRETTY_PRINT);
            } 
            
            else {
                header('Content-Type: text/html; charset=utf-8');
                echo "<h1>Erreurs au niveau de l'URL !</h1>";
            }
        }

        else {
            header('Content-Type: text/html; charset=utf-8');
            echo "<h1>Erreurs au niveau de l'URL !</h1>";
        }
    }

?>