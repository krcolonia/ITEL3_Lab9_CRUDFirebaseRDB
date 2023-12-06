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
        <table>
          <tr>
            <td>Agent ID:</td>
            <td><input type="text" name="agentId" value="VP-" required></td>
          </tr>
          <tr>
            <td>Agent Photo:</td>
            <td><input type="text" name="picture" required></td>
          </tr>
          <tr>
            <td>Codename:</td>
            <td><input type="text" name="codename" required></td>
          </tr>
          <tr>
            <td>Alt. Codename:</td>
            <td><input type="text" name="altCodename" required></td>
          </tr>
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstName" required></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastName" required></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td>
              <select name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Origin:</td>
            <td><input type="text" name="origin" required></td>
          </tr>
          <tr>
            <td>Role:</td>
            <td>
              <select name="role" required>
                <option value="Duelist">Duelist</option>
                <option value="Initiator">Initiator</option>
                <option value="Controller">Controller</option>
                <option value="Sentinel">Sentinel</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Join Date:</td>
            <td><input type="date" name="joinDate" required></td>
          </tr>
        </table>

        <div class="save">
          <input type="submit" value="SAVE">
        </div>

      </form>
    </div>
  </div>

</body>

</html>