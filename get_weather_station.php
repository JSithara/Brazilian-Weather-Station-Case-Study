<?php include('conn.php'); 

$sql = "SELECT weather_station_id FROM weather_station";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $output = array();
    while($row = $result->fetch_assoc()) {
        array_push($output,$row["weather_station_id"]);
    }
} else {
    //echo "0 results";
}
    echo json_encode($output);
$conn->close();

?>

