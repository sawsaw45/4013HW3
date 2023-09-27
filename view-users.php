<h1>Users</h1>
<div class="table-responsive">
    <table class="table">
    <thead>
          <tr>
              <th>UserID</th>
              <th>Username</th>
          </tr>
    </thead>
    <tbody>
    <?php
    foreach ($user = $users->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $user["UserID"] . "</td>";
        echo "<td>" . $user["Username"] . "</td>";
        echo "</tr>";
    }
    ?>

    </table>
</div>