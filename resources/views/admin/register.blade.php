<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style/AdminLogin.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Clothing</title>
</head>

<body>
    <div class="wrapper">
        <form action="adminregistration" method="post">
            @csrf
            <h1>SignUp</h1>
            <div class="input-box">
                <input type="text" placeholder="Enter Your Name" name="name" required> 
            </div>
            <div class="input-box">
                <input type="email" placeholder="Enter Email" name="email" required>
            </div>
            <div class="input-box">
                <input type="number" placeholder="Enter Number" name="number" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox" name="terms" value="1">Accept All T&C
                </label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p> Allready have an account ?</p> <a href="adminlogin">Login</a>
            </div>
        </form>
    </div>
</body>

</html>