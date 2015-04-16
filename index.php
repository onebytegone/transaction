<!doctype html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <h1>Object Transactions</h1>
   <p></p>
   <div>
      <h2>Try</h2>
      <form action="#">
         <div><span>Principal:</span><input type="text" value="<?php echo $_GET['principal'] ?>" name="principal"></div>
         <div><span>Interest Rate:</span><input type="text" value="<?php echo $_GET['rate'] ?>" name="rate"></div>
         <div><span>Times compounded:</span><input type="text" value="<?php echo $_GET['compound'] ?>" name="compound"></div>
         <div><span>Years:</span><input type="text" value="<?php echo $_GET['years'] ?>" name="years"></div>
         <div><input type="submit" value="Calculate"></div>
      </form>
   </div>
   <?php require 'src/demo.php'; ?>
</body>
</html>
