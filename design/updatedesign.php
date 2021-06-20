<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/assets/style.css">
    <title>regester</title>
</head>

<body>
    <form action="excuteupdate.php" class="regform" method="POST">
        <h1 style="color: red; text-transform: uppercase; background-color: #fff;">update users data </h1>
        <input type="hidden" value='<?= $getuserdata['id']; ?>' name="id" placeholder="id">
        <input type="hidden" value='<?= $getuserdata['regpass']; ?>' name="pass" placeholder="pass">
        <input type="text" value='<?= $getuserdata['regname']; ?>' name="name" placeholder="name">
        <input type="email" placeholder="email" value='<?= $getuserdata['regmail']; ?>' name="mail">
        <?php
        if ($_SESSION['user']['id'] == $getuserdata['id']) :
        ?>
            <input type="text" placeholder="password" value='<?= $getuserdata['regpass']; ?>' name="pass">
        <?php endif; ?>
        <input type="submit" value="update">
    </form>
</body>

</html>