<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $student_id = trim($_POST['student_id']);
    $department = $_POST['department'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    $errors = [];
    
    if (empty($first_name) || empty($last_name) || empty($email) || empty($department) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }
    
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }
    
    if (!isset($_POST['terms'])) {
        $errors[] = "You must agree to the Terms of Service.";
    }
    
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ? OR student_id = ?");
            $stmt->execute([$email, $student_id]);
            if ($stmt->fetchColumn() > 0) {
                $errors[] = "Email or student ID already exists.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (student_id, first_name, last_name, email, department, password) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$student_id, $first_name, $last_name, $email, $department, $hashed_password]);
                $_SESSION['success'] = "Registration successful! Please log in.";
                header("Location: login.php");
                exit();
            }
        } catch (PDOException $e) {
            $errors[] = "Error: " . $e->getMessage();
        }
    }
    
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: register.php");
        exit();
    }
} else {
    header("Location: register.php");
    exit();
}
?>