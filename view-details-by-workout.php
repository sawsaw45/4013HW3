<div class="container">
    <?php while($workout = $workouts->fetch_assoc()) { ?>
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
                    <td><?php
                            $rep = $workout['repetitions'];
                            if (isset($rep) or $rep != '')
                        {
                            echo $rep;
                        }
                        else
                        {
                            echo "N/A";
                        } ?></td>
                    <td><?php
                        $weigh = $workout['weight'];
                        if (isset($weigh) or $weigh != '')
                        {
                            echo $weigh;
                        }
                        else
                        {
                            echo "N/A";
                        } ?></td>
                    <td><?php echo $workout['duration']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>