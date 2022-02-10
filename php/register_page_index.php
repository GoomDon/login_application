<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_page_style.css">
    <title>Document</title>
</head>
<body>
    <div class="top_row">
        <form action="login.php" method="post">
        <button id="login_button" action="login.php" method="post" type="submit">Login</button>
        <input id="login_username" name="login_username" maxlength="25" placeholder="username" autocomplete="off" method="post"></input><br><br>
        <input id="login_password" name="login_password" maxlength="25" type="password" placeholder="password" autocomplete="off" method="post"></input>
        </form>
    </div>

    <div id="register_field">
        <form action="register_verification.php" method="post">
        <h1 class="register_area_text" id="register_area_text_username">Username</h1>
        <input id="username" name="register_username" class="input_textarea" maxlength="25" required autocomplete="off" method="post"></input>
        <h1 class="register_area_text">Email</h1>
        <input id="email" class="input_textarea" maxlength="50" type="email" required autocomplete="off"></input>
        <h1 class="register_area_text">Password</h1>
        <input id="password" class="input_textarea" maxlength="25" type="password" required autocomplete="off"></input>
        <h1 class="register_area_text">Confirm Password</h1>
        <input id="confirm_password" class="input_textarea" maxlength="25" type="password" required autocomplete="off"></input>
        <button id="register_button"  onclick="registerClick()" method="post" type="submit">Register</button>
        <div class="register_area_text" id="register_area_error"></div>
        </form>
    </div>

    <script type="text/javascript" src="../js/register_page_main.js"></script>
</body>
</html>