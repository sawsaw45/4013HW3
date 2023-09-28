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
        <td><?php echo $user['userid']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td>
         <form method="post" action="sections-by-course.php">
        <input type="hidden" name="cid" value="<?php echo $course['course_id']; ?>">
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