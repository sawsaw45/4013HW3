<?php
require_once("util-db.php");
require_once("model-workouts-by-user.php");
$pageTitle = "Workouts by User";
include "view-header.php";
$workouts = selectWorkoutsByUser($_POST['cid']);
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "add":
            if (insertWorkoutsByUser($_POST['uid'], $_POST['workoutname'], $_POST['date'], $_POST['duration'], $_POST['caloriesburned'])) {
                echo "<div class='alert alert-success' role='alert'>Workout added successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error adding Workout</div>";
            }
            break;
        case "delete":
            if (deleteWorkoutsByUser($_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>User deleted successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting user</div>";
            }
            break;
        case "edit":
            if (updateWorkoutsByUser($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['email'],$_POST['dob'], $_POST['gender'], $_POST['height'], $_POST['weight'],$_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>User Edited successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error Editing user</div>";
            }
            break;
    }
}
include "view-workouts-by-user.php";
include "view-footer.php";
?>