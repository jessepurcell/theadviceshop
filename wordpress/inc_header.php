<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // Get current page name
$name = substr($filename, 0, strrpos($filename, ".")); // Remove file extension
?>
<header id="pageHeader">
  <aside id="login">
    <form action="login.php?page=<?php echo $name; ?>" method="post">
      <input name="username" id="username" type="text" placeholder="Username" required>
      <input name="submit" type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
  </aside>
  <a href="index.php">
    <h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1>
  </a>
</header>