<?php
 define("mysqlServer","localhost");
    define("mysqlDB","CLINICADB");
    define("mysqlUser","root");
    define("mysqlPass","root");
 
    class connectToDB
    {
  public static function addCompany( $company, $details, $latitude, $longitude, $telephone) {
   $db_connection = new mysqli(mysqlServer, mysqlUser, mysqlPass, mysqlDB);
   $statement = $db_connection->prepare("Insert INTO companies( company, details, latitude, longitude, telephone) VALUES( ?, ?, ?, ?, ?)");
   $statement->bind_param('sssss', $company, $details, $latitude, $longitude, $telephone);
   $statement->execute();
   $statement->close();
   $db_connection->close();
  }
   
  }
 
?>