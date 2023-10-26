<?php
require_once("util-db.php");
require_once("model-exercises.php");
$pageTitle = "Exercises";
include "view-header.php";
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            $success = insertExercise($_POST['exercisename'], $_POST['description'], $_POST['musclegroup'], $_POST['equipmentrequired']);
            break;
        case "Delete":
            $success = deleteExercise($_POST['id']);
            break;
        case "Update":
            $success = updateExercise($_POST['exercisename'], $_POST['description'], $_POST['musclegroup'], $_POST['equipmentrequired'], $_POST['id']);
            break;
    }
}
$exercises = selectExercises();
include "view-exercises.php";
include "view-footer.php";
?>