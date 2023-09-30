<?php
require_once("util-db.php");
require_once("model-workouts-by-user.php");
$pageTitle = "Workouts by User";
include "view-header.php";
$workouts = selectWorkoutsByUser($GET_['id']);
include "view-workouts-by-user.php";
include "view-footer.php";
?>