<div class="container">
    <div class="row">
       <div class="col">
            <h1> Users</h1>
       </div>
        <div class="col-auto">
            <?php include "view-users-newform.php"; ?>
        </div>

    </div>

<div class="table-responsive">
    <table class="table ">
    <thead class="border border-danger">
          <tr>
              <th>UserID</th>
              <th>Username</th>
              <th></th>
              <th></th>
          </tr>
    </thead>
    <tbody>
    <?php
        while($user = $users->fetch_assoc()) {
            ?>
        <tr class="border border-dark">
        <td><?php echo $user['UserID']; ?></td>
        <td><?php echo $user['Username']; ?></td>
            <td>
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $user['UserID']; ?>">
                    <input type="hidden" name="actionType" value="delete">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
                        </svg>
                    </button>
                </form>
            </td>
            <td><?php include "view-users-editform.php";?></td>
        <td>
            <form method="post" action="workouts-by-user.php">
            <input type="hidden" name="cid" value="<?php echo $user['UserID']; ?>">
            <button type="submit" class="btn btn-primary">Workouts</button>
            </form>
        </td>

  </tr>
<?php
}
?>
    </tbody>
    </table>
</div>
    </div>