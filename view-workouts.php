<div class="container">
    <h1>Workouts</h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="border border-danger rounded">
            <tr>
                <th>Username</th>
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
                    <td><?php echo $workout['username']; ?></td>
                    <td><?php echo $workout['workoutname']; ?></td>
                    <td><?php echo $workout['date']; ?></td>
                    <td><?php echo $workout['Duration']; ?> min</td>
                    <td><?php echo $workout['CaloriesBurned']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>