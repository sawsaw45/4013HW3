

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUserWorkoutModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newUserWorkoutModal" tabindex="-1" aria-labelledby="newUserWorkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newUserWorkoutModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="UID" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="UID" name="UID">
                    </div>
                    <div class="mb-3">
                        <label for="WorkoutName"form-label">Workout Name</label>
                        <input type="text" class="form-control" id="WorkoutName" name="WorkoutName">
                    </div>
                    <div class="mb-3">
                        <label for="Date" class="form-label">Date</label>
                        <input type="text" class="form-control" id="Date" name="Date">
                    </div>
                    <div class="mb-3">
                        <label for="Duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="Duration" name="Duration">
                    </div>
                    <div class="mb-3">
                        <label for="CaloriesBurned" class="form-label">Calories Burned</label>
                        <input type="text" class="form-control" id="CaloriesBurned" name="CaloriesBurned">
                    </div>

                    <input type="hidden" name="actionType" value="add">
                    <form method="post" action="workouts-by-user.php">
                        <input type="hidden" name="cid" value="UID">

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>