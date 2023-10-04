<?php
function selectWorkouts()
{
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT workoutid, username, workoutname, date, Duration ,CaloriesBurned FROM Workouts w join Users u on w.UserID = u.UserID; ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
    function selectWorkoutDeets($wid) {
        try {
            $conn = get_db_connection();
            $stmt = $conn->prepare("Select repetitions, sets, wd.weight, duration FROM Users u JOIN Workouts w ON u.UserID = w.UserID JOIN WorkoutDetails wd ON w.WorkoutID = wd.WorkoutID WHERE wd.workoutid = ?; ");

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
?>