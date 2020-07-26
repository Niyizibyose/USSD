<?php

//Variables sent via POST from gateway

$sessionID = $_POST["sessionID"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];



if ($text= ""){
    $response = "CON Welcome to Ingenzi \n";
    $response = "1. Register for an account \n";
    $response = "2. Already have an account \n";
}


else if($text="2"){
    $response ="CON Welcome to Ingenzi \n";
    $response = "1. My account statistics \n";
    $response = "2. Register for a visit";

} else if ($text == "2*1"){
    $response = "CON Choose statistics type you want to view \n";
    $response = "1. Offices \n";
    $response = "2. Buildings and Malls \n";
    $response = "3. Buses \n";
    $response = "4. Motos \n";
} else if ($text = "1"){

    $response ="END Welcome.Please insert your ID number \n";
}
else if ($text == "2*1*1"){
$office ="5 offices for 50min";
$response = "You have visited".$office;
}
else if ($text == "2*1*2"){
$buildings = "10 buildings for a total of 5hrs and 10min";
$response = "You have visited".$buildings;
}
else if ($text == "2*1*3"){
$buses = "50 times in total of 11hrs and 3min";
$response = "You have used buses for".$buses;
}
else if ($text == "2*1*4")
{
$motos = "5 times in total for 1hr";
$response = "You have used motos for".$motos;
}

else {
    $response = "CON Welcome to Ingenzi \n";
    $response = "1. Register for an account \n";
    $response = "2. Already have an account \n";
}

header('Content-type; text/plain');
echo $response;

?>