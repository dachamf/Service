<?php

require_once 'ConnectionManager.php';

$response = array();

$db = Db::getInstance();

if (isset($_POST['sid'])) {

  $id = $_POST['sid'];

  $result = $db->get('Student', array('id', '=', $id));

  if (!empty($result)) {

    //$row = mysql_fetch_array($result);

    $student = array();
    $student['id'] = $db->first()->id;
    $student['index'] = $db->first()->index;
    $student['Name'] = $db->first()->Name;

    $response['success'] = 1;
    $response['student'] = array();

    array_push($response['student'], $student);

    echo json_encode($response);
  }
  else {
    $response['success'] = 0;
    $response['message'] = 'No student found with such id';

    echo json_encode($response);
  }
}
else {
  $response['success'] = 0;
  $response['message'] = 'No student found with such id';

  echo json_encode($response);

}

