<?php
function selectDetailsByWorkout($wid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select workoutdetailid, workoutname, username, repetitions, sets, wd.weight, duration FROM Users u JOIN Workouts w ON u.UserID = w.UserID JOIN WorkoutDetails wd ON w.WorkoutID = wd.WorkoutID WHERE wd.workoutid = ?; ");

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
        $stmt = $conn->prepare("INSERT INTO `WorkoutDetails` (`WorkoutID`, `ExerciseID`, `Sets`, `Repetitions`, `Weight`) VALUES (?, ?, ?, ?, ?) ");
        $stmt->bind_param("iiiid", $wid , $eid, $sets, $reps, $weight);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDetailsByWorkout($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `WorkoutDetails` WHERE `WorkoutDetailID` = ?");
        $stmt->bind_param("i", $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectExercisesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT exerciseid, exercisename FROM `Exercises` order by exerciseid asc");
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
