

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal<?php echo $exercise['exerciseid'];?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editUserModal<?php echo $exercise['exerciseid'];?>" tabindex="-1" aria-labelledby="editUserModalLabel<?php echo $exercise['exerciseid'];?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editUserModalLabel<?php echo $exercise['exerciseid'];?>">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="id<?php echo $exercise['exerciseid'];?>" class="form-label">Exercise ID</label>
                        <input class="form-control" type="text" id="id<?php echo $exercise['exerciseid'];?>" name="id" value="<?php echo $exercise['exerciseid'];?>" readonly>

                    </div>
                    <div class="mb-3">
                        <label for="exercisename<?php echo $exercise['exerciseid'];?>" class="form-label">Exercise Name</label>
                        <input type="text" class="form-control" id="exercisename<?php echo $exercise['exerciseid'];?>" name="exercisename" value="<?php echo $exercise['exercisename'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="description<?php echo $exercise['exerciseid'];?>" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description<?php echo $exercise['exerciseid'];?>" name="description" value="<?php echo $exercise['description'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="musclegroup<?php echo $exercise['exerciseid'];?>" class="form-label">Muscle Group</label>
                        <input type="text" class="form-control" id="musclegroup<?php echo $exercise['exerciseid'];?>" name="musclegroup" value="<?php echo $exercise['musclegroup'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="equipmentrequired<?php echo $exercise['exerciseid'];?>" class="form-label">Equipment Required</label>
                        <input type="text" class="form-control" id="equipmentrequired<?php echo $exercise['exerciseid'];?>" name="equipmentrequired" value="<?php echo $exercise['equipmentrequired'];?>">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $exercise['exerciseid']; ?>" />
                    <input type="hidden" name="actionType" value="Edit"/>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>