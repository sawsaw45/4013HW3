<div class="container">
    <?php while($workout = $workouts->fetch_assoc()) { ?>
    <h1><?php echo $workout['username']?> <?php echo $workout['workoutname']?> </h1>
<?php } ?>
    <div class="table-responsive">
        <table class="table">
            <thead class="border border-danger rounded">
            <tr>
                <th>Sets</th>
                <th>Reps</th>
                <th>Weight</th>
                <th>Duration</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($workout = $workouts->fetch_assoc()) {
                ?>
                <tr class="border border-dark">
                    <td><?php echo $workout['sets']; ?></td>
                    <td><?php echo $workout['reps']; ?></td>
                    <td><?php echo $workout['wd.weight']; ?></td>
                    <td><?php echo $workout['duration']; ?></td>
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