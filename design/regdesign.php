<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/assets/style.css">
    <title>regester</title>
</head>

<body>
    <form action="reg.php" class="regform" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name" required>
        <input type="email" placeholder="email" name="mail" required>
        <input type="password" placeholder="pass" name="pass" required>
        <input type="password" placeholder="confirm pass" name="conpass" required>
        <input type="file" name="img" placeholder="user image">
        <!-- <input list="browsers" placeholder="select permision" name="permission" required> -->
        <datalist id="browsers">
            <option value="<?php
                            selectpermission();
                            ?>">

        </datalist>
        <input type="submit" value="reg">
    </form>
</body>

</html>