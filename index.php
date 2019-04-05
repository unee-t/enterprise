<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Enterprise reports</title>
<meta name="robots" content="noindex, nofollow">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 10px;
  font-family: Noto Serif, serif;
}
h2 { border-bottom: thin solid black; }
</style>
<body>
<?php
require './vendor/autoload.php';

/********* CONFIG ********/
$clusterEndpoint = getenv("MYSQL_HOST");
// $clusterEndpoint = "auroradb.dev.unee-t.com";
$clusterPort = 3306;
$clusterRegion = "ap-southeast-1";
$dbUsername = "mydbuser";
$dbDatabase = "unee_t_enterprise";
/*************************/
use Aws\Credentials\CredentialProvider;
$provider = CredentialProvider::defaultProvider();
$RdsAuthGenerator = new Aws\Rds\AuthTokenGenerator($provider);
$token = $RdsAuthGenerator->createToken($clusterEndpoint . ":" . $clusterPort, $clusterRegion, $dbUsername);
$mysqli = mysqli_init();
$mysqli->real_connect($clusterEndpoint, $dbUsername, $token, $dbDatabase, $clusterPort, NULL, MYSQLI_CLIENT_SSL);
if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: <br />";
    echo "Errno: " . $mysqli->connect_errno . "<br />";
    echo "Error: " . $mysqli->connect_error . "<br />";
    exit;
}
/***** Example code to perform a query and return all tables in the DB *****/
$tableList = array();
$res = mysqli_query($mysqli,"SHOW TABLES");
while($cRow = mysqli_fetch_array($res))
{
    $tableList[] = $cRow[0];
}

echo '<h1>Table listing</h1><pre>';
print_r($tableList);
echo '</pre>';

?>
</body>
</html>
