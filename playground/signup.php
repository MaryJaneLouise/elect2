<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sign Up | MaryJane</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="center">
    <h1>Sign Up Form</h1>
    <form method="post">
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Last Name</label>
        </div>
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>First Name</label>
        </div>
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password"  required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Re-enter Password</label>
        </div>
        <input type="submit" value="Sign me up!">
        <div class="signup_link">
            Already a member? <a href="login.php">Login.</a>
        </div>
    </form>
</div>

</body>
</html>
