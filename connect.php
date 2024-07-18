<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "robot";

$conn = mysqli_connect($host, $username, $pass, $dbname);


if ($conn) {
   echo "connected";
  
}
else{
    echo "not connected";
}

$sql = "SELECT * FROM robot ORDER BY name DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
    }
}

?>
