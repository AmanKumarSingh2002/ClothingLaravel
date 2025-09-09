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
        <form action="adminverify" method="post">
            @csrf
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="email"> <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password"><i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox">RemberMe
                </label>
                <a href="adminpasswordupdate" >Forget Password</a>
            </div>
            <button type="submit" class="btn">login</button>
            <div class="register-link">
                <p> Don't have an account ?</p> <a href="adminregisteration">Register</a>
            </div>
        </form>
    </div>
</body>

</html>