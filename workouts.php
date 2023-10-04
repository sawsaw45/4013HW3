<?php
require_once("util-db.php");
require_once("model-workouts.php");
$pageTitle = "Workouts";
include "view-header.php";
$workouts = selectWorkouts();
include "view-workouts.php";
include "view-footer.php";
?>