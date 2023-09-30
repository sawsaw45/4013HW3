<?php
function selectWorkouts() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT u.username, workoutname, date, Duration ,CaloriesBurned
FROM Workouts w join users u on w.UserID = u.UserID");
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