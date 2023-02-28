<?php

function idGenerator($len = 8, $name){
    $possible_values = "abcdefg1h3i4j5k6l7m8n9o0pqrstuvwxyz";
    $id = "";
    for ($i=0; $i <= $len ; $i++) { 
        $random_num = rand(0, strlen($possible_values) - 1);
        $random_letters = $possible_values[$random_num];
        $id .= $random_letters;
    }
    
    echo "<p>Hi $name, Your ID is $id.</p>";
}

idGenerator(10, "penmalik");