<?php
function selectWorkoutsByUser($wid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT workoutid, username, workoutname, date, duration ,caloriesburned FROM Workouts w join Users u on w.UserID = u.UserID WHERE u.userid=?; ");
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
function insertWorkoutsByUser($uid, $workoutname, $date, $duration, $caloriesburned) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Workouts` (`UserID`, `WorkoutName`, `Date`, `Duration`, `CaloriesBurned`) VALUES (?, ?, ?, ?, ?) ");
        $stmt->bind_param("issid", $uid, $workoutname, $date, $duration, $caloriesburned);
        $success =$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteWorkoutsByUser($wid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `Workouts` where `WorkoutID` = ?");
        $stmt->bind_param("s", $wid);
        $success =$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateWorkoutsByUser($wid, $uid, $workoutname, $date, $duration, $caloriesburned) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Workouts` set `UserID` = ?, `WorkoutName` = ?, `Date` = ?, `Duration` = ?, `CaloriesBurned` = ? where `WorkoutID` = ?");
        $stmt->bind_param("issssi", $uid, $workoutname, $date, $duration, $caloriesburned, $wid);
        $success =$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>