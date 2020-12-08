<?php

 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $dbname = "klanten";  

try {
    $database = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO tblArtikel (Artikelgroep,Verpakking,Inhoud,Omschrijving,btw_code,emballage,prijs) VALUES (?,?,?,?,?,?,?)";
    $getData = $database->prepare($query);
    $data = array (
        "DVD", "DOOS", 30,"MONOPOLY", 1,21,26
    );

    try { 
        $getData->execute($data);
        echo "query uitgevoerd";
    }
    catch(PDOException $error) {
        Echo "Data niet opgehaald";
    }
    
}
catch(PDOException $error)  
{  
    echo "connection failed";

}  



?>