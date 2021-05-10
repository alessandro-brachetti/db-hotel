<?php
include 'db_conn.php';

header('Content-Type: application/json');

if (!empty($_GET)) {
  $id = $_GET['id'];
  $result = [];

  $stmt = $conn -> prepare("SELECT * FROM stanze WHERE id = ?");
  $stmt ->bind_param("i", $id);

  $stmt ->execute();
  $rows = $stmt -> get_result();
  while ($row = $rows ->fetch_assoc()) {
    $result[] = $row;
  }
  echo json_encode([
    "response" => $result,
  ]);
} else {
  $sql = "SELECT * FROM stanze";
  $rows = $conn -> query($sql);
  $result = [];

  if ($rows->num_rows > 0) {
    while ($row = $rows ->fetch_assoc()) {
      $result[] = $row;
    }
  }
  echo json_encode([
    "response" => $result,
  ]);
}
$conn->close();
 ?>
