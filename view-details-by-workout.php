<div class="container">
    <div class="row">
        <div class="col">
            <h1>Workout Details</h1>
        </div>
        <div class="col-auto">
            <p class="text-danger">Don't click this it's just to meet rubric. This should only have one record per workout.</p>
            <?php
            include "view-details-by-workout-newform.php"; ?>
        </div>
    </div>
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
                <th></th>
                <th></th>
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
                        $weigh = number_format($workout['weight']);
                        if (isset($weigh) or $weigh != '')
                        {
                            echo $weigh;
                        }
                        else
                        {
                            echo "N/A";
                        } ?></td>
                    <?php include "view-details-by-workout-editform.php";?>
                    <td><?php echo $workout['duration']; ?></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="wdid" value="<?php echo $workout['workoutdetailid']; ?>">
                            <input type="hidden" name="actionType" value="Delete">

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