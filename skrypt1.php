<?php
$mysqli = new mysqli("localhost","root","","dane3");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$zapytanie = "SELECT id, nazwa, zdjecie, opis FROM produkty WHERE id=18 OR id=22 OR id=23 OR id=25";

$wynik = mysqli_query($mysqli, $zapytanie);

while($row = mysqli_fetch_array($wynik))
{
  echo "<div class='video'>";
  echo "<h4>".$row['id'].", ".$row['nazwa']."</h4>";
  echo "<form action='skrypt3.php' method='POST'>";
  echo "<button><img src='".$row['zdjecie']."' alt='film'></button>";
  echo "<input name='id_video' value='".$row['id']."' type='hidden'>";
  echo "</form>";
  echo "<p>".$row['opis']."</p>";
  echo "</div>";
  }
mysqli_close($mysqli);
?>