<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- BOX ICONS -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Responsive Login Form Sign In Sign Up</title>
</head>
<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="assets/img/img-login.svg" alt="">
            </div>

            <div class="login__forms">
                <!-- Login Form -->
                <form action="auth.php" method="POST" class="login__registre block" id="login-in">
                    <h1 class="login__title">Sign In</h1>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" name="username" placeholder="Username" class="login__input" required>
                    </div>
                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" name="password" placeholder="Password" class="login__input" required>
                    </div>
                    <button type="submit" name="signin" class="login__button">Sign In</button>

                    <!-- Link to Sign Up -->
                    <div>
                        <span class="login__account">Don't have an Account?</span>
                        <span class="login__signin" id="sign-up">Sign Up</span> <!-- Link to show signup form -->
                    </div>
                </form>

                <!-- Signup Form -->
                <form action="auth.php" method="POST" class="login__create none" id="login-up">
                    <h1 class="login__title">Create Account</h1>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" name="username" placeholder="Username" class="login__input" required>
                    </div>
                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="email" name="email" placeholder="Email" class="login__input" required>
                    </div>
                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" name="password" placeholder="Password" class="login__input" required>
                    </div>
                    <button type="submit" name="signup" class="login__button">Sign Up</button>

                    <!-- Link to Sign In -->
                    <div>
                        <span class="login__account">Already have an Account?</span>
                        <span class="login__signup" id="sign-in">Sign In</span> <!-- Link to show sign-in form -->
                    </div>
                </form>

            </div>
        </div>
    </div>


        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>