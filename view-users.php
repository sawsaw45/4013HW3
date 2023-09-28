<div class="container">
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
        while($user = $users->fetch_assoc()) {
            ?>
        <tr>
        <td><?php echo $user['UserID']; ?></td>
        <td><?php echo $user['Username']; ?></td>
        <td>
         <form method="post" action="workouts-by-user.php">
        <input type="hidden" name="cid" value="<?php echo $user['UserID']; ?>">
        <button type="submit" class="btn btn-primary">Sections</button>
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