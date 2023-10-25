<?php
require_once("util-db.php");
require_once("model-workouts-by-user.php");
$pageTitle = "Workouts by User";
include "view-header.php";
$workouts = selectWorkoutsByUser($_POST['cid']);
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertWorkoutsByUser($_POST['uid'], $_POST['workoutname'], $_POST['date'], $_POST['duration'], $_POST['caloriesburned'])) {
                echo "<div class='alert alert-success' role='alert'>Workout added successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error adding Workout</div>";
            }
            break;
        case "Delete":
            if (deleteWorkoutsByUser($_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>Workout deleted successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting Workout</div>";
            }
            break;
        case "Edit":
            if (updateWorkoutsByUser($_POST['uid'], $_POST['workoutname'], $_POST['date'], $_POST['duration'],$_POST['caloriesburned'], $_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>Workout Edited successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error Editing Workout</div>";
            }
            break;
    }
}
include "view-workouts-by-user.php";
include "view-footer.php";
?>