<?php
$host = "localhost";
$port = "5432";
$dbname = "aidil";
$user = "postgres";
$password = "maidani";

try {
    $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    if (!$db) {
        throw new Exception("Unable to connect to PostgreSQL server.");
    }

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
