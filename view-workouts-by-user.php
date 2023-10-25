<div class="container">
    <div class="row">
        <div class="col">
            <h1>Workouts by User</h1>
        </div>
        <div class="col-auto">
            <?php $user = $_POST['cid']; ?>
            <?php include "view-workouts-by-user-newform.php"; ?>
        </div>
    </div>

    </h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="border border-danger rounded">
            <tr>
                <th>Workout</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Calories Burned</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($workout = $workouts->fetch_assoc()) {
                ?>
                <tr class="border border-dark">
                    <td><?php echo $workout['workoutname']; ?></td>
                    <td><?php echo $workout['date']; ?></td>
                    <td><?php echo $workout['duration']; ?></td>
                    <td><?php echo number_format($workout['caloriesburned']); ?></td>
                    <td><?php include "view-workouts-by-user-editform.php"?></td>
                    <td>
                        <form method="post" action="details-by-workout.php?id=<?php echo $workout['workoutid'];?>">
                            <input type="hidden" name="cid" value="<?php echo $workout['workoutid']; ?>">
                            <button type="submit" class="btn btn-primary">Workout Details</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $workout['workoutid']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <input type="hidden" name="cid" value="<?php echo $_POST['cid']; ?>" />
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                            </button>
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