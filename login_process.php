<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = trim($_POST['student_id']);
    $password = trim($_POST['password']);
    
    if (!empty($student_id) && !empty($password)) {
        try {
            $stmt = $pdo->prepare("SELECT student_id, password FROM users WHERE student_id = ?");
            $stmt->execute([$student_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['student_id'] = $user['student_id'];
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['error'] = "Invalid student ID or password.";
                header("Location: login.php");
                exit();
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "Error: " . $e->getMessage();
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Please fill in all fields.";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>