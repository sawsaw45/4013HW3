<div class="container">
    <h1>Workouts</h1>
<<<<<<< HEAD
    <div class="card-columns" >
        <?php while($workout = $workouts->fetch_assoc()) { ?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <div class="container-fluid" >
        <?php while($workout = $workouts->fetch_assoc()) { ?>
>>>>>>> parent of 5f51174 (mega test)
        <div class="card">
                <?php $workoutDeets = selectWorkoutDeets($workout['workoutid']);
                 while($workoutDeet = $workoutDeets->fetch_assoc()) { ?>
            <div class="card-body">
                 <h5 class="card-title"><?php echo $workout['username']?> <?php echo $workout['workoutname']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $workout['date'] ?></h6>
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
<<<<<<< HEAD
=======
=======
>>>>>>> parent of c449aaa (mega test 1)
            <div class="col-sm-4">
                <div class="card">
                    <?php $workoutDeets = selectWorkoutDeets($workout['workoutid']);
                    while($workoutDeet = $workoutDeets->fetch_assoc()) { ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $workout['username']?> <?php echo $workout['workoutname']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $workout['date'] ?></h6>
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
>>>>>>> parent of c449aaa (mega test 1)

<<<<<<< HEAD
<<<<<<< HEAD
                    </div>
                </div>
            </div>


=======
<?php } ?>
            </div>
>>>>>>> parent of a405b39 (noooooo)
=======
            </div>
>>>>>>> parent of 5f51174 (mega test)
=======

            </div>
>>>>>>> parent of 5f51174 (mega test)
        </div>
<?php }?>
    </div>
</div>