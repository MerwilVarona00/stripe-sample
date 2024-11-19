<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    
    <style>
        * {
    font-family: "Lucida Console", "Courier New", monospace;
}

h1 {
    font-size: 25px;
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: center;
}

.user {
    text-align: center;
}

.pass {
    text-align: center;
    padding-top: 15px;
}

.btn {
    padding-top: 25px;
    padding-left: 63%;
}

.bt {
    color: white;
    background-color: #7552F8;
    border: 2px solid #7552F8;
    border-radius: 6px;
    width: 70%;
    height: 30px;
}

img {
    padding-top: 100px;
    width: 100px;
    height: 100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.register p {
    font-size: 12px; 
    text-align: center;
}

.card {
    cursor: pointer;
    width: 330px;
    height: 254px;
    background: rgb(255, 255, 255);
    border-radius: 5px;
    border: 1px solid rgb(185, 195, 250);
    transition: all .2s;
    box-shadow: 12px 12px 2px 1px rgb(117, 81, 248);
    margin-left: auto;
    margin-right: auto;
    margin-top: 35px;
}

.card:hover {
    box-shadow: -12px 12px 2px -1px rgb(78, 54, 167);
}

    </style>
</head>
<body>
    <img src="./photo/strap.png" alt="logo">
    <div class="card">
        <div class="user">
            <h1>Sign in to Strapi</h1>
            <form method="POST" action="login.php">
                <label>Username</label>
                <input type="text" name="username" id="username" required>
            </form>
        </div>
        <div class="pass">
            <label>Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="btn">
            <button type="submit" class="bt">Sign In</button>
        </div>
        <br>
        <div class="register">
            <p>Don't have an account? Click <a href="register-form.php">here.</a></p>
        </div>
    </div>
</body>
</html>
