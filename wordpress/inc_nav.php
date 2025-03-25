<nav>
  <ul>
    <li <?php if ($name == "index")
      echo 'class="current"'; ?>><a href="index.php"><span
          class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "advisors")
      echo 'class="current"'; ?>><a href="advisors.php"><span
          class="glyphicon glyphicon-star"></span> Advisors</a></li>
    <li <?php if ($name == "samples")
      echo 'class="current"'; ?>><a href="samples.php"><span
          class="glyphicon glyphicon-comment"></span> Sample Advice</a></li>
    <li <?php if ($name == "submit_advice")
      echo 'class="current"'; ?>><a href="submit_advice.php"><span
          class="glyphicon glyphicon-comment"></span> Submit Advice</a></li>
    <li <?php if ($name == "advice_of_the_day")
      echo 'class="current"'; ?>><a href="advice_of_the_day.php"><span
          class="glyphicon glyphicon-comment"></span> AOTD</a></li>
    <li <?php if ($name == "subscribe")
      echo 'class="current"'; ?>><a href="subscribe.php"><span
          class="glyphicon glyphicon-shopping-cart"></span> Subscribe Now</a></li>
  </ul>
</nav>

