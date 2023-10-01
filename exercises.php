<?php
require_once("util-db.php");
require_once("model-exercises.php");
$pageTitle = "Exercises";
include "view-header.php";
$exercises = selectExercises();
include "view-exercises.php";
include "view-footer.php";
?>