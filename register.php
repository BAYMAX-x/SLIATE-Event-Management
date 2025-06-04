<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIATE Registration Portal</title>
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

        .register-container {
            background-color: rgba(37, 8, 65, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .register-header p {
            color: #cccccc;
            font-size: 1rem;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 25px;
        }

        .form-row .form-group {
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 15px;
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            color: rgb(226, 210, 210);
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 15px;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #ff8c00;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .terms-agreement {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .terms-agreement input {
            margin-right: 10px;
            margin-top: 3px;
        }

        .terms-agreement label {
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .terms-agreement a {
            color: #ff8c00;
            text-decoration: none;
        }

        .terms-agreement a:hover {
            text-decoration: underline;
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

        .login-link {
            text-align: center;
            margin-top: 25px;
            font-size: 0.9rem;
            color: #cccccc;
        }

        .login-link a {
            color: #ff8c00;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .login-link a:hover {
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
            .register-container {
                padding: 30px 20px;
            }
            .form-row {
                flex-direction: column;
                gap: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <p>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</p>
    </div>
    
    
    
    <div class="main-content">
        <div class="register-container">
            <div class="register-header">
                <h2>REGISTER</h2>
                <p>Create your student account</p>
            </div>

        <?php if (!empty($errors)): ?>
            <div class="text-red-500 mb-4">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

            <form method="POST" action="register_process.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name" placeholder="Enter your first name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label for="student-id">Student ID (if available)</label>
                    <input type="text" id="student-id" name="student_id" placeholder="Enter your student ID if you have one">
                </div>
                
                <div class="form-group">
                    <label for="program">Department</label>
                    <select id="program" name="department" required>
                        <option value="" selected>Select your Department</option>
                        <option value="hndit">Higher National Diploma in Information Technology</option>
                        <option value="hnda">Higher National Diploma in Accountancy</option>
                        <option value="hnde">Higher National Diploma in English</option>
                    </select>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Create a password" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
                    </div>
                </div>
                
                <div class="terms-agreement">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of the Sri Lanka Institute of Advanced Technological Education.</label>
                </div>
                
                <button type="submit" class="btn">REGISTER</button>
                
                <div class="login-link">
                    Already have an account? <a href="login.php">Login here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>