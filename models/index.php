<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>
        <div id="wrapper">
            <div class="header">

            </div>
            <div class="wrapper">
                <div class="left-sidebar">
                    <div class="login-box">
                        <form method="post" action="actions/user_accounts.actions.php">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username...">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password...">
                            <input type="submit" value="Login" name="login">
                            <input type="reset" value="Reset">
                        </form>
                        <a href="register.php">Register</a>
                    </div>
                </div>
                <div class="container">
                        <h3>Welcome!</h3>
                        <a href="index.php">Home</a> / <a href="register.php">Register</a>
                </div>
            </div>
        </div>
    </body>
</html>