<?php
// All data imported from form.html
// Basic Data
$name = $_GET['Name']; // Name of person making the report
$resources = $_GET['Resources']; // Resources they require
$disaster = $_GET['Disaster']; // The type of disaster they're experiencing
$urgency = $_GET['urgency']; // How urgent the issue is

// Basic Data Input sanitisation
$name = htmlspecialchars($name);
$resources = htmlspecialchars($resources);
$disaster = htmlspecialchars($disaster);
$urgency = htmlspecialchars($urgency);

// Location Data
$lat = $_GET['Lat']; // Latitude
$long = $_GET['Long']; // Logitude

// Location Data Input Sanitisation
$lat = htmlspecialchars($lat);
$long = htmlspecialchars($long);


// Database login details
include 'dbDetails.php';

// Create connection and insert data to database
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO issue_reports (Name, resource, message, lat, lng, type)
  VALUES ('$name', '$resources', '$disaster', '$lat', '$long', '$urgency')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// Terminate Connection
$conn = null;
//Redirect to form page
header('Location: index.php')
?>