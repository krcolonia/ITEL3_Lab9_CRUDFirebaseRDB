<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB("$databaseURL");

$id = $_GET['id'];

$retrieve = $db->retrieve("agents/$id");
$data = json_decode($retrieve, 1);

?>

<!DOCTYPE html>

<html>

<head>
  <title>VALORANT Agents DB | Editing Agent Info</title>
</head>
<link rel="stylesheet" href="./styles/edit.css">

<body>

  <div class="contentHolder">
    <div class="tableContainer">
      <form method="post" action="action_edit.php">
        <table class="editInfoInputs">
          <tr>
            <td>Agent ID</td>
            <td>:</td>
            <td><input type="text" name="agentId" value="<?php echo $data['agentId'] ?>" required></td>
          </tr>
          <tr>
            <td>Agent Photo</td>
            <td>:</td>
            <td><input type="text" name="picture" value="<?php echo $data['picture'] ?>" required></td>
          </tr>
          <tr>
            <td>Codename</td>
            <td>:</td>
            <td><input type="text" name="codename" value="<?php echo $data['codename'] ?>" required></td>
          </tr>
          <tr>
            <td>Alt. Codename</td>
            <td>:</td>
            <td><input type="text" name="altCodename" value="<?php echo $data['altCodename'] ?>" required></td>
          </tr>
          <tr>
            <td>First Name</td>
            <td>:</td>
            <td><input type="text" name="firstName" value="<?php echo $data['firstName'] ?>" required></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td>:</td>
            <td><input type="text" name="lastName" value="<?php echo $data['lastName'] ?>" required></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>:</td>
            <td><input type="text" name="gender" value="<?php echo $data['gender'] ?>" required></td>
          </tr>
          <tr>
            <td>Origin</td>
            <td>:</td>
            <td><input type="text" name="origin" value="<?php echo $data['origin'] ?>" required></td>
          </tr>
          <tr>
            <td>Role</td>
            <td>:</td>
            <td><input type="text" name="role" value="<?php echo $data['role'] ?>" required></td>
          </tr>
          <tr>
            <td>Join Date</td>
            <td>:</td>
            <td><input type="date" name="joinDate" value="<?php echo $data['joinDate'] ?>" required></td>
          </tr>

        </table>
    </div>

    <div class="editDesign">
      <div class="editDesignTop"></div>
      <div class="edit">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="SAVE EDITS">
      </div>
      <div class="editDesignBottom"></div>
    </div>

  </div>

  </form>

</body>

</html>