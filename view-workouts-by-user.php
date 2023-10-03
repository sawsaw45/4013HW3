<div class="container">
    <h1>Workouts by User
    </h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="border border-danger rounded">
            <tr>
                <th>Workout</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Calories Burned</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($workout = $workouts->fetch_assoc()) {
                ?>
                <tr class="border border-dark">
                    <td><?php echo $workout['workoutname']; ?></td>
                    <td><?php echo $workout['date']; ?></td>
                    <td><?php echo $workout['Duration']; ?></td>
                    <td><?php echo number_format($workout['CaloriesBurned']); ?></td>
                    <td>
                        <form method="post" action="details-by-workout.php?id=<?php echo $workout['workoutid'];?>">
                            <input type="hidden" name="cid" value="<?php echo $workout['workoutid']; ?>">
                            <button type="submit" class="btn btn-primary">Workout Details</button>
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