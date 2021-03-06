<?php 

// DB connection gives us a $db global variable
require_once  __DIR__ . '/db-connect.php';

$sql = 'SELECT `name`, `comment` ' .
  'FROM comments ' .
  'WHERE `deleted` = 0 ' .
  'ORDER BY `id` DESC';

// Runs the query and returns back a mysql result
$result = mysqli_query($db, $sql);

// If there are comments, we set the global variable with the results
if(mysqli_num_rows($result) > 0) {
  while($row = $result->fetch_assoc()) {
    $comments[] = $row;
  }
}
