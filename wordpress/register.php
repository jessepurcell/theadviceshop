<?php include("dbconnect.php"); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
    <?php include("inc_header.php");
    include("inc_nav.php"); ?>
    <!-- <section id="content"> -->
    <div class="center-container">
        <div class="register-container">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <input type="submit" value="Register">
            </form>

            <?php if (isset($error)): ?>
                <p class="error-message"><?php echo $error; ?></p>
            <?php endif; ?>

            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <!-- </section> -->
    <?php include("inc_footer.php"); ?>
</body>

</html>