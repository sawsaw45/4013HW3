<div class="container">
    <<div class="row">
        <div class="col">
            <h1>Exercises</h1>
        </div>
        <div class="col-auto">
            <?php include "view-exercises-newform.php"; ?>
        </div>
    </div>
    <h1>Exercises
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