<?php
function selectUsers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT UserID, FirstName, LastName, Username, Email, DateOfBirth, Gender, Height, Weight FROM `Users` ORDER BY UserID ASC");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertUser($firstname, $lastname, $username, $email, $DoB, $gender, $height, $weight) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Users` (`FirstName`, `LastName`, `Username`, `Email`, `DateOfBirth`, `Gender`, `Height`, `Weight`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $firstname, $lastname, $username, $email, $DoB, $gender, $height, $weight);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteUser($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Users` WHERE UserID = ?");
        $stmt->bind_param("i", $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateUser($firstname, $lastname, $username, $email, $DoB, $gender, $height, $weight, $id  ) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Users` set `FirstName` = ?, `LastName` = ?, `Username` = ?, `Email` = ?, `DateOfBirth` = ?, `Gender` = ?, `Height` = ?, `Weight` = ? where `UserID` = ?");
        $stmt->bind_param("ssssssssi", $firstname, $lastname, $username, $email, $DoB, $gender, $height, $weight, $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>