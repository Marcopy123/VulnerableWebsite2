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
        <form action="login.php" method="post" class="login">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="username" class="prompt">Username:</label>
            <input type="text" name="uname" placeholder="User Name" class="input"><br>
            <label for="password" class="prompt">Password:</label>
            <input class="input" type="password" name="password" placeholder="Password"><br>
            <button type="submit">Go</button>
        </form>
    </div>
</body>