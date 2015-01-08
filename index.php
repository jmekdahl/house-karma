<!DOCTYPE>
<html>
<head>
<title>Login - House Karma</title>
</head>
<body>
    <form id="form-login" method="POST" action="index.php" onsubmit="return validate.login();" />
        <input type="text" name="name" placeholder="username" />
        <input type="password" name="passkey" placeholder="password" />
        <input type="hidden" name="action" value="login" />
        <input type="submit" value="Login" />
    </form>
    <? include_once('scripts.php') ?>
</body>
</html>