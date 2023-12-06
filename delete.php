<?php

session_start();

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB("$databaseURL");

$id = $_GET['id'];

if($id != "") {
  $delete = $db -> delete("agents", $id);
  echo "Data Deleted!";
}

if($delete) {
  $_SESSION['status'] = "Agent Info Deleted Successfully";
  header('Location: index.php');
}
else {
  $_SESSION['status'] = "Error in Deleting Record";
  header('Location: index.php');
}

?>