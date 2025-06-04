<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
unset($_SESSION['error']);
unset($_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIATE Login Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #250841;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: white;
        }

        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #250841;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header h1 {
            font-size: 2.3rem;
            letter-spacing: 1px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 5px;
        }

        .header p {
            font-size: 1rem;
            letter-spacing: 3px;
        }

        .navigation {
            background-color: #1a052e;
            padding: 15px 0;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navigation a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            font-weight: bold;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        .navigation a:hover {
            color: #ff8c00;
        }

        .navigation .active {
            color: #ff8c00;
            border-bottom: 2px solid #ff8c00;
            padding-bottom: 3px;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .login-container {
            background-color: rgba(37, 8, 65, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .login-header p {
            color: #cccccc;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #ff8c00;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }

        .form-footer a {
            color: #ff8c00;
            text-decoration: none;
            transition: color 0.3s;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 8px;
        }

        .btn {
            width: 100%;
            padding: 14px;
            background-color: #ff8c00;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            letter-spacing: 1px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #e67e00;
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            font-size: 0.9rem;
            color: #cccccc;
        }

        .register-link a {
            color: #ff8c00;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8rem;
            }
            .navigation a {
                margin: 0 10px;
                font-size: 0.9rem;
            }
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        
        <p>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</p>
    </div>
    
    <div class="main-content">
        <div class="login-container">
            <div class="login-header">
                <h2>LOGIN</h2>
                <p>Access your student account</p>
            </div>

        <?php if (!empty($error)): ?>
            <p class="text-red-500 text-center mb-4"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

            <form method="POST" action="login_process.php">
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" id="student_id" name="student_id" placeholder="Enter your student ID" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="form-footer">
                    <div class="remember-me">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                
                <button type="submit" class="btn">LOGIN</button>
                
                <div class="register-link">
                    Don't have an account? <a href="register.php">Register now</a>
                </div>
            </form>
        </div>
    </div>

   <?php if (!empty($success)): ?>
        <script>
            alert("<?php echo htmlspecialchars($success); ?>");
        </script>
    <?php endif; ?>

</body>
</html>