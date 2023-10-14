<!DOCTYPE html>
<html>
    <head>
        <title>Name</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <img src="./Images/hacker.png" class="bg">
    <div class="welcome">
        <h1 class="textWelcome">Welcome fellow mellows</h1>
        <h2 class="textWelcome">Please log in, your information is safe.</h2>
        <form class="login" action="login.php" method="post">
            
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php echo $_GET['group']; ?>
            <label class="prompt">User Name</label>
            <input class="input" type="text" name="uname" placeholder="User Name"><br>

            <button type="submit">Go</button>
        </form>
    </div>
</body>