<?php
$mysqli = new mysqli("localhost","root","","dane3");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$temp = $_POST['id_video'];

$zapytanie = "DELETE FROM produkty WHERE id = $temp";

$wynik = mysqli_query($mysqli, $zapytanie);

header("Location: /zad3/video.php")
?>