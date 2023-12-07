<!DOCTYPE html>

<html lang="en">

<head>
  <title>VALORANT Agents DB | Adding New Agent</title>
</head>
<link rel="stylesheet" href="./styles/add.css">

<body>

  <div class="contentHolder">
    <div class="tableContainer">
      <form method="post" action="action_add.php">
        <table class="addInfoInputs">
          <tr>
            <td>Agent ID</td>
            <td>:</td>
            <td><input type="text" name="agentId" placeholder="VP-00" required></td>
          </tr>
          <tr>
            <td>Agent Photo</td>
            <td>:</td>
            <td><input type="text" name="picture" placeholder="https://image.url/" required></td>
          </tr>
          <tr>
            <td>Codename</td>
            <td>:</td>
            <td><input type="text" name="codename" placeholder="Codename" required></td>
          </tr>
          <tr>
            <td>Alt. Codename</td>
            <td>:</td>
            <td><input type="text" name="altCodename" placeholder="Alt Codename" autocomplete="off" required></td>
          </tr>
          <tr>
            <td>First Name</td>
            <td>:</td>
            <td><input type="text" name="firstName" placeholder="First Name" autocomplete="off" required></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td>:</td>
            <td><input type="text" name="lastName" placeholder="Last Name" autocomplete="off" required></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>:</td>
            <td><input type="text" name="gender" placeholder="Male / Female" autocomplete="off" required></td>
          </tr>
          <tr>
            <td>Origin</td>
            <td>:</td>
            <td><input type="text" name="origin" placeholder="Country of Origin" autocomplete="off" required></td>
          </tr>
          <tr>
            <td>Role</td>
            <td>:</td>
            <td><input type="text" name="role" placeholder="Team Role" autocomplete="off" required></td>
          </tr>
          <tr>
            <td>Join Date</td>
            <td>:</td>
            <td><input type="date" name="joinDate" required></td>
          </tr>
        </table>

    </div>

    <div class="saveDesign">
      <div class="saveDesignTop"></div>
      <div class="save">
        <input type="submit" value="SAVE AGENT INFO">
      </div>
      <div class="saveDesignBottom"></div>
    </div>

    </form>

  </div>

</body>

</html>