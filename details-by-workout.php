<?php
require_once("util-db.php");
require_once("model-details-by-workout.php");
$pageTitle = "Details by Workout";
include "view-header.php";
$workouts = selectDetailsByWorkout($_GET['id']);
include "view-details-by-workout.php";
include "view-footer.php";
?><?php
