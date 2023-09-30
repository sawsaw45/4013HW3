<div class="container">
    <h1>Users</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
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
                <tr>
                    <td><?php echo $workout['Username']; ?></td>
                    <td><?php echo $workout['Workoutname']; ?></td>
                    <td><?php echo $workout['Date']; ?></td>
                    <td><?php echo $workout['Duration']; ?></td>
                    <td><?php echo $workout['Caloriesburned']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>