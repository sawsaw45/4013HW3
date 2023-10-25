<?php
function selectDetailsByWorkout($wid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select workoutname, username, repetitions, sets, wd.weight, duration FROM Users u JOIN Workouts w ON u.UserID = w.UserID JOIN WorkoutDetails wd ON w.WorkoutID = wd.WorkoutID WHERE wd.workoutid = ?; ");

        $stmt->bind_param("i", $wid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertDetailsByWorkout($wid, $eid, $sets, $reps, $weight) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `WorkoutDetails` (`WorkoutID`, `ExerciseID`, `Sets`, `Repetitions`, `Weight`) VALUES (NULL, NULL, NULL, NULL, NULL) ");

        $stmt->bind_param("isssd", $wid , $eid, $sets, $reps, $weight);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
