<?php

session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "Osmanosman1.";  
 $dbname = "klanten";  
 $message = " ";

try {
    $database = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO tblArtikel (Artikelgroep,Verpakking,Inhoud,Omschrijving,btw_code,emballage,prijs) VALUES (?,?,?,?,?,?,?)";
    $getData = $database->prepare($query);
    $data = array (
        "DVD", "DOOS", 30,"MONOPOLY", 1,11,25
    );

    try {
        $getData->execute($data);
        echo "query uitgevoerd";
    }
    catch(PDOException $error) {
        echo "data niet opgehaald";
    }
    
}
catch(PDOException $error)  
{  
     $error = "Verbinding niet gemaakt";
     echo $error;
}  



?>