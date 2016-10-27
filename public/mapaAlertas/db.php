<?php
 define("mysqlServer","localhost");
    define("mysqlDB","phpclases");
    define("mysqlUser","root");
    define("mysqlPass","");
 
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
  
  public static function getCompaniesList() {
   $arr = array();
   $db_connection = new mysqli(mysqlServer, mysqlUser, mysqlPass, mysqlDB);
   $statement = $db_connection->prepare("Select id, company, details, latitude, longitude, telephone from companies order by company ASC");
   $statement->bind_result( $id, $company, $details, $latitude, $longitude, $telephone);
   $statement->execute();
   while ($statement->fetch()) {
    $arr[] = [ "id" => $id, "company" => $company, "details" => $details, "latitude" => $latitude, "longitude" => $longitude, "telephone" => $telephone];
   }
   $statement->close();
   $db_connection->close();
   
   return $arr;}
   
   public static function updateCompany( $id, $details, $latitude, $longitude, $telephone) {
	 $db_connection = new mysqli(mysqlServer, mysqlUser, mysqlPass, mysqlDB);
	 $statement = $db_connection->prepare("Update companies SET details = ?,latitude = ?,longitude = ?,telephone = ? where id = ?");
	 $statement->bind_param('ssssi', $details, $latitude, $longitude, $telephone, $id);
	 $statement->execute();
	 $statement->close();
	 $db_connection->close();
	}
   
  }
 
?>