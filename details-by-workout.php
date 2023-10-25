<?php
require_once("util-db.php");
require_once("model-details-by-workout.php");
$pageTitle = "Details by Workout";
include "view-header.php";
$workouts = selectDetailsByWorkout($_GET['id']);
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
        case "Edit":
            if (updateDetailsByWorkout($_POST['wid'], $_POST['workoutname'], $_POST['sets'], $_POST['reps'],$_POST['weight'], $_POST['wdid'])) {
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
