<div class="container">
    <h1>Workouts</h1>
    <div class="card-group">
        <?php while($workout = $workouts->fetch_assoc()) { ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $workout['username']?> <?php echo $workout['workoutname']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $workout['date'] ?></h6>
                <?php $workoutDeets = selectWorkoutDeets($workout['workoutid']);
                 while($workoutDeet = $workoutDeets->fetch_assoc()) { ?>
                <p class="card-text">Reps:<?php echo $workoutDeet['repetitions']?>, Sets: <?php echo $workoutDeet['sets']?>, Weight: <?php echo number_format($workoutDeets['weight'])?></p>
            </div>
            <?php } }?>

    </div>
</div>