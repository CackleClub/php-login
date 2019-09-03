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
<link rel="stylesheet" type="text/css" href="views/form.css">
<!-- login form box -->
<form class="formbox" method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <br />
    <input id="login_input_username" class="login_input formtextbox" type="text" name="user_name" required />
    <br />
    <br/>
    <label for="login_input_password">Password</label>
    <br />
    <input id="login_input_password" class="login_input formtextbox" type="password" name="user_password" autocomplete="off" required />
    <br/>
    <br />
    <input class="formbutton" type="submit" name="login" value="Log in" />
    <br />
    <br />
    <a href="register.php">Register new account</a>
</form>