<!doctype html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <div>
      <h1>Object Transactions</h1>
      <p>This calculates compound interest using transactional processing. Each calculation is its own module. When needed the modules handle their own data validation.</p>
      <p>Source code: <a href="https://github.com/onebytegone/transaction">https://github.com/onebytegone/transaction</a></p>
      <p>Algorithm:<br><img src="images/algorithm.png"></p>
   </div>
   <hr>
   <div>
      <h2>Try</h2>
      <form action="#">
         <div><span>Principal:</span><input type="text" value="<?php echo $_GET['principal'] ?>" name="principal"></div>
         <div><span>Interest Rate:</span><input type="text" value="<?php echo $_GET['rate'] ?>" name="rate"></div>
         <div><span>Times compounded:</span><input type="text" value="<?php echo $_GET['compound'] ?>" name="compound"></div>
         <div><span>Years:</span><input type="text" value="<?php echo $_GET['years'] ?>" name="years"></div>
         <div><input type="submit" value="Calculate"></div>
      </form>
      <br>
   </div>
   <hr>
   <?php require 'src/demo.php'; ?>
</body>
</html>
