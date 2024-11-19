<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>

    <style>
        * {
            font-family: "Lucida Console", "Courier New", monospace;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #FFFFFF; /* White background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            color: rgb(0, 0, 0);
            background-color: #B9C3FA;
            border: 2px solid #B9C3FA;
            border-radius: 6px;
            height: 30px;
            font-weight: bold;
        }

        h1 {
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            width: 400px;
            background: rgb(255, 255, 255);
            border-radius: 5px;
            border: 1px solid rgb(185, 195, 250);
            transition: all .2s;
            box-shadow: 12px 12px 2px 1px rgb(117, 81, 248);
            padding: 20px;
            text-align: center;
        }

        .card:hover {
            box-shadow: -12px 12px 2px -1px rgb(78, 54, 167);
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            font-size: 1rem;  /* Slightly smaller font for labels */
            width: 40%;
            text-align: left;
        }

        input {
            width: 55%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            margin-left: 250px;
        }

        .bt {
            color: white;
            background-color: #7552F8;
            border: 2px solid #7552F8;
            border-radius: 6px;
            width: 55%;  /* Reduced width of the Sign Up button */
            height: 40px;
            font-size: 16px;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <!-- Back Button -->
    <a href="login-form.php">
        <button class="back-btn" type="button">⇦ Back</button>
    </a>

    <!-- Registration Form -->
    <form method="POST" action="register.php">
        <div class="card">
            <h1>Create Account</h1>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <div class="btn">
                <button type="submit" class="bt">Sign Up</button>
            </div>
        </div>
    </form>

</body>
</html>
