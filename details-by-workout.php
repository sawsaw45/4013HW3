<?php
require_once("util-db.php");
require_once("model-details-by-workout.php");
$pageTitle = "Details by Workout";
include "view-header.php";
$workouts = selectDetailsByWorkout($_GET['cid']);
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertDetailsByWorkout($_POST['wid'], $_POST['eid'], $_POST['sets'], $_POST['reps'], $_POST['weight'])) {
                echo "<div class='alert alert-success' role='alert'>Workout detail added successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error adding Workout Detail</div>";
            }
            break;
        case "Delete":
            if (deleteDetailsByWorkout($_POST['wdid'])) {
                echo "<div class='alert alert-success' role='alert'>Details deleted successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting details</div>";
            }
            break;
        case "edit":
            if (updateDetailsByWorkout($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['email'],$_POST['dob'], $_POST['gender'], $_POST['height'], $_POST['weight'],$_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>User Edited successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error Editing user</div>";
            }
            break;
    }
}
include "view-details-by-workout.php";
include "view-footer.php";
?><?php
