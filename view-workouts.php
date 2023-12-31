<div class="container">
    <h1>Workouts</h1>


            <?php while($workout = $workouts->fetch_assoc()) { ?>
                    <div class="card-group">
                        <?php
                        for ($x = 0; $x <= 4; $x++) { ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $workout['username']?> <?php echo $workout['workoutname']?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $workout['date'] ?></h6>
                                <?php $workoutDeets = selectWorkoutDeets($workout['workoutid']);
                                while($workoutDeet = $workoutDeets->fetch_assoc()) { ?>
                                    <p class="card-text">Reps: <?php
                                        if ($workoutDeet['repetitions'] == 0 OR $workoutDeet['repetitions'] == NULL) {
                                            echo "N/A";
                                        } else {
                                            echo $workoutDeet['repetitions'];
                                        }
                                        ?>, Sets: <?php echo $workoutDeet['sets']?>, Weight: <?php
                                        if ($workoutDeet['weight'] == 0 OR $workoutDeet['weight'] == NULL) {
                                            echo "N/A";
                                        } else {
                                            echo number_format($workoutDeet['weight']);
                                        }
                                        ?></p>

                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
            <?php } ?>

</div>

