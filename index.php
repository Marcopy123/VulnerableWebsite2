<!DOCTYPE html>
<html>
    <head>
        <title>Name</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <form action="login.php" method="post">
        <h2>Enter your name!</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php echo $_GET['group']; ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <button type="submit">Go</button>
    </form>
</body>