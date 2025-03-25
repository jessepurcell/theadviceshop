<?php include("dbconnect.php"); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - AOTD</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
    <?php include("inc_header.php");
    include("inc_nav.php"); ?>

    <?php if (isset($_REQUEST['name'])) {
        echo "<h2>Thank you " . $_REQUEST['name'] . " for submitting your advice.</h2>";
    } ?>
    <section id="content">
        <h2>Advice of the day</h2>

        <?php $hour - date("H");
        if ($hour % 2) {
            echo "<p><strong>Don't count the days, make the days count.</strong></p>";
        } else {
            echo "<p><strong>Always be yourself, unless you can be Batman. Then always be Batman.</strong></p>";
        }

        $advice = [
            "The only way to do great work is to love what you do.",
            "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.",
            "Don't watch the clock; do what it does. Keep going.",
            "The future belongs to those who believe in the beauty of their dreams.",
            "You are never too old to set another goal or to dream a new dream."
        ];
        $random_advice = $advice[array_rand($advice)];
        echo "<p><strong>Random Advice: $random_advice</strong></p>";
        ?>
    </section>
    <?php include("inc_footer.php"); ?>
</body>

</html>