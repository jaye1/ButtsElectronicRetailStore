<?php
include "connectdb.php";

$query= "SELECT * FROM Product";
$result = mysqli_query($conn, $query);

while($row=mysqli_fetch_array($result)){
	$data[] = $row;
}
echo json_encode($data);
?>
