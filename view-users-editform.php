

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal<?php echo $user['UserID'];?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editUserModal<?php echo $user['UserID'];?>" tabindex="-1" aria-labelledby="editUserModalLabel<?php echo $user['UserID'];?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editUserModalLabel<?php echo $user['UserID'];?>">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="firstName<?php echo $user['UserID'];?>" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName<?php echo $user['UserID'];?>" name="firstName" value="<?php echo $user['FirstName'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="lastName<?php echo $user['UserID'];?>" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName<?php echo $user['UserID'];?>" name="lastName" value="<?php echo $user['LastName'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="username<?php echo $user['UserID'];?>" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username<?php echo $user['UserID'];?>" name="username" value="<?php echo $user['Username'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email<?php echo $user['UserID'];?>" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email<?php echo $user['UserID'];?>" name="email" value="<?php echo $user['email'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="dob<?php echo $user['UserID'];?>" class="form-label">Date of Birth</label>
                        <input type="text" class="form-control" id="dob<?php echo $user['UserID'];?>" name="dob" value="<?php echo $user['DateOfBirth'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender<?php echo $user['UserID'];?>" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender<?php echo $user['UserID'];?>" name="gender" value="<?php echo $user['Gender'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="height<?php echo $user['UserID'];?>" class="form-label">Height</label>
                        <input type="text" class="form-control" id="height<?php echo $user['UserID'];?>" name="height" value="<?php echo $user['Height'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="weight<?php echo $user['UserID'];?>" class="form-label">Weight</label>
                        <input type="text" class="form-control" id="weight<?php echo $user['UserID'];?>" name="weight" value="<?php echo $user['weight'];?>">
                    </div>
                    <input type="hidden" name="actionType" value="edit">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>