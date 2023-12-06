<?php

session_start();

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB("$databaseURL");

$id = $_POST['id'];

$update = $db->update("agents", $id, [
  "agentId" => $_POST['agentId'],
  "picture" => $_POST['picture'],
  "codename" => $_POST['codename'],
  "altCodename" => $_POST['altCodename'],
  "firstName" => $_POST['firstName'],
  "lastName" => $_POST['lastName'],
  "gender" => $_POST['gender'],
  "origin" => $_POST['origin'],
  "role" => $_POST['role'],
  "joinDate" => $_POST['joinDate']
]);

if($update) {
  $_SESSION['status'] = "Agent Info Updated Successfully";
  header('Location: index.php');
}
else {
  $_SESSION['status'] = "Error in Updating Record";
  header('Location: index.php');
}

?>