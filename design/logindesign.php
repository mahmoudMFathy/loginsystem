<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/assets/style.css">
    <title>log in </title>
</head>

<body>
    <form action="login.php" class="loginform" method="POST">
        <input type="email" placeholder="email" name="mail" required>
        <input type="password" placeholder="pass" name="pass" required>
        <input type="submit" value="log in">
        <br>
    </form>
    <div id="gotosignin">
    <button onclick="window.location.href='./reg.php'" > you dont have account please regist</button>
    </div>
    
</body>

</html>