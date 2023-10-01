<div class="container">
<h1>Users</h1>
<div class="table-responsive">
    <table class="table">
    <thead class="border border-danger">
          <tr>
              <th>UserID</th>
              <th>Username</th>
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
         <form method="post" action="workouts-by-user.php?id=<?php echo $user['UserID'];?>">
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