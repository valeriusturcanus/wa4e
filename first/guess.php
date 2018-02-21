<head>
<title>Valeriu Turcanu</title>
</head>
<body>
    <h1>Welcome to  my guessing game</h1>
    <pre>
    <?php
    
    if ( ! isset($_GET['guess']) ) { 
        echo("Missing guess parameter");
      } else if ( ! is_numeric($_GET['guess']) ) {
        echo("Your guess is not a number");
      } else if ( $_GET['guess'] < 44 ) {
        echo("Your guess is too low");
      } else if ( $_GET['guess'] > 44 ) {
        echo("Your guess is too high");
      } else {
        echo("Congratulations - You are right");
      }
    ?>
    </pre>
   
</body>