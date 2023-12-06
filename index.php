<?php

session_start();

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB("$databaseURL");

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>VALORANT Agents DB</title>
</head>

<link rel="stylesheet" href="./styles/index.css">

<body>

  <?php

  if (isset($_SESSION['status'])) {
    echo "<script> alert('" . $_SESSION['status'] . 
    "');</script>";
    unset($_SESSION['status']);
  }

  ?>

  <div class="contentHolder">
    <div class="tableContainer">
      <table class="agentTable">
        <thead>
          <tr>
            <td>AGENT ID</td>
            <td>PHOTO</td>
            <td>CODENAME</td>
            <td>ALT CODENAME</td>
            <td>FIRST NAME</td>
            <td>LAST NAME</td>
            <td>GENDER</td>
            <td>ORIGIN</td>
            <td>ROLE</td>
            <td>JOIN DATE</td>
            <td colspan="2">DB ACTIONS</td>
          </tr>
        </thead>
        <tbody>
          <?php

          $data = $db->retrieve("agents");
          $data = json_decode($data, 1);

          if (is_array($data)) {
            foreach ($data as $id => $agents) {
              echo "
                  <tr>
                    <td>{$agents['agentId']}</td>
                    <td><img src='{$agents['picture']}' width='50px' height='50px'></td>
                    <td>{$agents['codename']}</td>
                    <td>{$agents['altCodename']}</td>
                    <td>{$agents['firstName']}</td>
                    <td>{$agents['lastName']}</td>
                    <td>{$agents['gender']}</td>
                    <td>{$agents['origin']}</td>
                    <td>{$agents['role']}</td>
                    <td>{$agents['joinDate']}</td>
                    <td><a href='edit.php?id=$id'>EDIT</a></td>
                    <td><a href='delete.php?id=$id'>DELETE</a></td>
                  </tr>
                ";
            }


          }

          ?>
        </tbody>
      </table>

    </div>

    <a href="add.php" class="add">
      <button>ADD NEW AGENT</button>
    </a>

  </div>

</body>

</html>