<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/assets/style.css">
    <title>home page</title>
</head>

<body>
    <header id="homepageheader">
        <pre class="logoututt"><a href="logout.php">logout</a></pre>
        <?php
        echo "hello ";
        echo $_SESSION['user']['regname'] ;
        echo"<br>";
        echo $_SESSION['user']['img'];
        ?>
        </pre>
    </header>
    <section>
        <center>
            <h1 style="text-transform: uppercase;">users </h1>
        </center>
        <table id="membertable">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>img</th>
                <th>permission</th>
            </tr>
            <?php foreach ($dataofmember as $member) : ?>
                <tr class="memberdata">
                    <td><?= $member['id']; ?></td>
                    <td> <?= $member['regname']; ?> </td>
                    <td> <?= $member['regmail']; ?> </td>
                    <td> <?= $member['regpass']; ?> </td>
                    <td><img width="100px" height="30px" src="design/assets/img/<?= $member['img']; ?>" alt="user img"></td>

                    <td> <?= ($member['admin']) ? 'admin' : 'user'; ?> </td>
                    <?php
                    if (permission() == 1) :
                    ?>
                        <td >
                            <form action="delete.php" method="POST">
                                <input type="hidden" value="  <?= $member['id']; ?> " name="id">
                                <input type="submit" value="delete">
                            </form>
                        </td>
                        <td>
                            <form action="update.php" method="POST" >
                                <input type="hidden" value="  <?= $member['id']; ?> " name="id">
                                <input type="submit" value="update">
                            </form>
                        </td>
                    <?php endif; ?>

                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <footer id="footerhomepage">
        <p>&copy;&nbsp;design by mondy&nbsp;&bull; </p>
    </footer>
</body>

</html>