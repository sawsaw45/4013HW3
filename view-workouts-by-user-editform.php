

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editWorkoutModal<?php echo $workout['workoutid'];?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editWorkoutModal<?php echo $workout['workoutid'];?>" tabindex="-1" aria-labelledby="editWorkoutModalLabel<?php echo $workout['workoutid'];?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editWorkoutModalLabel<?php echo $workout['workoutid'];?>">Edit Workout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="firstName<?php echo $workout['workoutid'];?>" class="form-label">UserID</label>
                        <input type="text" class="form-control" id="firstName<?php echo $workout['workoutid'];?>" name="uid" value="<?php echo $_POST['cid'];?>">
                        <input class="form-control" type="text" id="firstName<?php echo $workout['workoutid'];?>" name="uid" value="<?php echo $_POST['cid'];?>" readonly>

                    </div>
                    <div class="mb-3">
                        <label for="lastName<?php echo $workout['workoutid'];?>" class="form-label">Workout Name</label>
                        <input type="text" class="form-control" id="lastName<?php echo $workout['workoutid'];?>" name="workoutname" value="<?php echo $workout['workoutname'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="username<?php echo $workout['workoutid'];?>" class="form-label">Date</label>
                        <input type="text" class="form-control" id="username<?php echo $workout['workoutid'];?>" name="date" value="<?php echo $workout['date'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email<?php echo $workout['workoutid'];?>" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="email<?php echo $workout['workoutid'];?>" name="duration" value="<?php echo $workout['duration'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="dob<?php echo $workout['workoutid'];?>" class="form-label">Calories Burned</label>
                        <input type="text" class="form-control" id="dob<?php echo $workout['workoutid'];?>" name="caloriesburned" value="<?php echo $workout['caloriesburned'];?>">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $workout['workoutid']; ?>" />
                    <input type="hidden" name="cid" value="<?php echo $_POST['cid']; ?>" />
                    <input type="hidden" name="actionType" value="Edit"/>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>