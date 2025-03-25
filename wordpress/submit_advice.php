<?php include("dbconnect.php"); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Submit Advice</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
    <?php include("inc_header.php");
    include("inc_nav.php"); ?>

    <?php if (isset($_REQUEST['name'])) {
        echo "<h2>Thank you " . $_REQUEST['name'] . " for submitting your advice.</h2>";
    } ?>
    <section id="content">
        <h2>Submit Advice</h2>
        <p><strong>We want to hear from you!</strong></p>
        <p>Do you have some great advice to share? We want to hear from you! Please fill out the form below and we will
            review your submission.</p>
        <form action="submit_advice.php" method="post">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="advice">Your Advice:</label><br>
            <textarea id="advice" name="advice" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </section>
    <?php include("inc_footer.php"); ?>
</body>

</html>