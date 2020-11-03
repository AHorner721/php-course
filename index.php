<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    
    // variable declarations
    $name = "PHP Store";
    $credit = 1000;

    //arrayName[key] = value
    $products['Computer']=750;
    $products['Car']=15000;
    $products['iPhone']=1000;
    $products['Toaster']=75;

    //concat with period (.)
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You have $".$credit." in your wallet.</h2>";
    // echo "<p>A car costs ".$products['Car'].".</p>";

    //Types of loops in PHP = for, while, foreach
    //Loop through products array
    foreach($products as $key => $value){
      echo "<p>The ".$key." costs ".$value.".</p>";
    }
    ?>
  </body>
</html>