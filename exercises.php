<?php
require_once("util-db.php");
require_once("model-exercises.php");
$pageTitle = "Exercises";
include "view-header.php";
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if ($success = insertExercise($_POST['exercisename'], $_POST['description'], $_POST['musclegroup'], $_POST['equipmentrequired'])) {
                echo "<div class='alert alert-success' role='alert'>Exercise added successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error adding exercise</div>";
            }
            break;
        case "Delete":
            if ($success = deleteExercise($_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>Exercise deleted successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting exercise</div>";
            }
            break;
        case "Edit":
            if ($success = updateExercise($_POST['exercisename'], $_POST['description'], $_POST['musclegroup'], $_POST['equipmentrequired'], $_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>Exercise updated successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error updating exercise</div>";
            }
            break;
    }
}
$exercises = selectExercises();
include "view-exercises.php";
include "view-footer.php";
?>