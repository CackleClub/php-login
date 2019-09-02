<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!-- css link -->
<link rel="stylesheet" type="text/css" href="form.css">
<!-- login form box -->
<form class="formbox" method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>

    <input id="login_input_password" class="login_input " type="password" name="user_password" autocomplete="off" required />
    <br />
    <input type="submit" name="login" value="Log in" />
    <br />
    <br />
    <a href="register.php">Register new account</a>
</form>