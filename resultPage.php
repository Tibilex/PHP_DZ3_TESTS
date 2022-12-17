<?php
   session_start();
?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700&display=swap&subset=cyrillic-ext" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <title>TEST 1</title>
</head>
<body>
   <div class="container">
      <br>
      <?php
         echo '<div class="text">TEST 1 result = '.$_SESSION['testResult1'].'</div>';
         echo '<div class="text">TEST 2 result = '.$_SESSION['testResult2'].'</div>';
         echo '<div class="text">TEST 3 result = '.$_SESSION['testResult3'].'</div>';
      if(isset($_POST['sNext'])){
         echo "<script> location.href='index.php'; </script>";
         $_SESSION['testResult1'] = 0;
         $_SESSION['testResult2'] = 0;
         $_SESSION['testResult3'] = 0;
      }
      ?>
      <br>
      <button class="btn btn-1__blink-left" type="submit" name="sNext" value="Next!">Пройти тест заново</button>
      <br>
   </div>
</body>

