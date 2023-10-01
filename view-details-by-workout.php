<div class="container">
    <h1><?php echo $workout['username']?> <?php echo $workout['workoutname']?> </h1>

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

                <tr class="border border-dark">
                    <td><?php echo $workout['sets']; ?></td>
                    <td><?php echo $workout['repetitions']; ?></td>
                    <td><?php echo $workout['weight']; ?></td>
                    <td><?php echo $workout['duration']; ?></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>