<html>
<head>
<title>Guessing Game for Pavel Ilin</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>
  <p>
  <?php
    if (! isset($_GET['guess'])) {
      echo("Missing guess parameter");
    } else if (strlen($_GET['guess']) < 1) {
      echo("Your guess is too short");
    } else if (! is_numeric($_GET['guess'])) {
      echo("Your guess is not a number");
    } else if ($_GET['guess'] < 42) {
      echo("Your guess is too low");
    } else if ($_GET['guess'] > 42) {
      echo("Your guess is too hight");
    } else {
      echo("That's right - you win");
    }
   ?>
 </p>
</body>
</html>
