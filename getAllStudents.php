<?php

require_once 'ConnectionManager.php';

$response = array();

$db = DB::getInstance();

$result = $db->query('SELECT * FROM Student');

if ($db->count() > 0) {
  $response['student'] = array();

  foreach ($db->results() as $row) {
    $student = array();
    $student['id'] = $row->id;
    $student['index'] = $row->index;
    $student['Name'] = $row->Name;

    array_push($response['student'], $student);
  }

  $response['success'] = 1;

  echo json_encode($response);
}
else {
  $response['success'] = 0;
  $response['message'] = 'No students found';

  echo json_encode($response);
}