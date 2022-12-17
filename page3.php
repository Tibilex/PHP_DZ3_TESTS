<?php
   session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700&display=swap&subset=cyrillic-ext" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <title>TEST 3</title>
</head>
<body>
<div class="container">
    <div class="DZ_3">
        <form id="test__form" method='post'>
            <p>TEST 3</p>
            <p>Сколько будет 2 + 2 ?</p>
            <input type="text" name="rQuest1">
            <p>Сколько будет !5 ?</p>
            <input type="text" name="rQuest2">
            <p>Сколько букв в слове "Синий" ?</p>
            <input type="text" name="rQuest3">
            <p>Сколько символов в этом предложении ?</p>
            <input type="text" name="rQuest4">
            <p>Сколько цветов в радуге ?</p>
            <input type="text" name="rQuest5">
            <p>Сколько континентов на земле ?</p>
            <input type="text" name="rQuest6">
            <p>Сколько у человека зубов ?</p>
            <input type="text" name="rQuest7">
            <p>Самый большой океан ?</p>
            <input type="text" name="rQuest8">
            <p>Самое глубокое озеро ?</p>
            <input type="text" name="rQuest9">
            <br>
            <br>
            <button class="btn btn-1__blink-left" type="submit" name="sNext" value="Next!">Дальше ></button>
           <br>
           <?php
           $answersScore = 0;
           $answers = ['4', '36', '120', '5', '37', '7', '7', '32', 'тихий', 'байкал'];
           function GetAnswersScore($answers): int
           {
              $totalScore = 0;

                 for ($i = 0; $i < 10; $i += 1) {
                    if (isset($_POST["rQuest{$i}"])) {
                       if ($_POST["rQuest{$i}"] == $answers[$i]) {
                          $totalScore += 5;
                       } else {
                          $totalScore += 0;
                       }
                    }
                 }
              return $totalScore;
           }

           if(isset($_POST['sNext'])){
              for ($i = 0; $i < 10; $i += 1) {
                 if (isset($_POST["rQuest{$i}"])) {
                    if ($_POST["rQuest{$i}"] == '') {
                       echo '<div class="warning__text">Not all fields are filled</div>';
                       break;
                    }
                    else
                    {
                       $_SESSION['testResult3'] = GetAnswersScore($answers);
                       echo "<script> location.href='resultPage.php'; </script>";
                       exit;
                    }
                 }
              }
              echo '<div class="warning__text">'.$answersScore.'</div>';
           }
           ?>
    </div>
</html>