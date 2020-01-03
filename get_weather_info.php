<?php include('conn.php'); 
$wsid = $_GET ["wsid"];
$sql = "SELECT * FROM sudeste where wsid = ".$wsid." LIMIT 10000";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $output = array();
    while($row = $result->fetch_assoc()) {
        array_push($output,$row);
    }
} else {
    //echo "0 results";
}
    echo json_encode($output);
$conn->close();
?>