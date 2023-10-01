<div class="container">
    <h1>Workouts by User
    </h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="border border-danger rounded">
            <tr>
                <th>Exercise</th>
                <th>Description</th>
                <th>Muscle Group</th>
                <th>Equipment Needed</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($exercise = $exercises->fetch_assoc()) {
                ?>
                <tr class="border border-dark">
                    <td><?php echo $exercise['exercisename']; ?></td>
                    <td><?php echo $exercise['description']; ?></td>
                    <td><?php echo $exercise['musclegroup']; ?></td>
                    <td><?php echo $exercise['equipmentrequired']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>