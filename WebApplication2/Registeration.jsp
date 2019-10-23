<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="logo">
        <img src="img/mainLogo.png" id="logo">
    </div>
    <main>
        <div class="buttons login-button-active" data-action="animated">
            <button class="login-button">
                <span class="log-link login-button-active" data-action="animated" style="color:maroon; font-weight:bold;">Login</span>
                <span class="login-underline login-button-active" data-action="animated"></span>
            </button>
            <button class="signup-button">
                <span class="sign-link " data-action="animated" style="color:maroon; font-weight:bold;">Sign Up</span>
                <span class="signup-underline signup-button-active" data-action="animated"></span>
            </button>
        </div>
        <div class="forms">
            <form class="login-form login-button-active" action="check-login.jsp" method="post" data-action="animated">
                <fieldset>
                    <legend>Please, enter your email and password for login.</legend>
                    <label for="login-user">Username</label>
                    <input id="login-user" type="text" name="luser" required autocomplete=off>
                    <label for="login-password">Password</label>
                    <input id="login-password" type="password" name="password" required autocomplete=off>
                </fieldset>
                <span id="msg"></span>
                <input type="submit" value="Login" style="cursor:pointer">
            </form>
            <form class="signup-form" action="signupdbms.jsp" method="post" data-action="animated">
                <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <label for="signup-user">Aadhar Number *</label>
                    <input id="signup-user" type="text" name="suser" required autocomplete=off>
                    <label for="signup-name">Name *</label>
                    <input id="signup-name" type="text" name="name" required autocomplete=off>
                    <label for="signup-email">E-mail *</label>
                    <input id="signup-email" type="email" name="email" required autocomplete=off>
                    <label for="signup-number">Contact Number *</label>
                    <input id="signup-number" type="number" name=" number" size="20"  max="9999999999" MIN ="1000000000" required autocomplete="off"/>
                    <label for="signup-password">Password *</label>
                    <input id="signup-password" type="password" name="spassword" required>
                    <label for="signup-confirm-password">Confirm password *</label>
                    <input id="signup-confirm-password" type="password" name="spassword1" required>
                </fieldset>
                <input type="submit" value="Sign Up" style="cursor:pointer">
            </form>
        </div>
    </main>




    <script src="js/index.js"></script>




</body>

</html>