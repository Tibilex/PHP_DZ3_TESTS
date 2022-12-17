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
    <title>TEST 2</title>
</head>
<body>
<div class="container">
    <div class="DZ_3">
        <form id="test__form" method="post">
           <p>TEST 2</p>
           <br>
            <p>1. Выберите четные числа.</p>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest1">121</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest1">34</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest1">17</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest1">62</label>
            <p>2. Выберите не четные числа.</p>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest2">33</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest2">41</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest2">88</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest2">57</label>
            <p>3. Выберите числа которые делятся на 2.</p>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="checkbox">42</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="checkbox">11</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="checkbox">0</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="checkbox">4</label>
            <p>4. Выберите положительные числа.</p>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest4">564</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest4">-74</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest4">444</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest4">-87</label>
            <p>5. Выберите Отрицательные числа.</p>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest5">-1</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest5">43</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest5">5553</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest5">-273</label>
            <p>6. Выберите не факториалы.</p>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest6">1</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest6">!1</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest6">!4</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest6">6</label>
            <p>7. Выберите цвета которых нет в радуге</p>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest7">Розовый</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest7">Оранжевый</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest7">Красный</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest7">Черный</label>
            <p>8. Выберите цвета радуги</p>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest8">Белый</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest8">Голубой</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest8">Синий</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest8">Желтый</label>
            <p>9. Сколько цветов в радуге</p>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest9">7</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest9">8</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest9">6</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest9">9</label>
            <p>10. 10% от числа 120</p>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest10">21</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest10">1.2</label>
            <input type="checkbox" name="rQuest[]" value="1">
            <label for="rQuest10">12</label>
            <input type="checkbox" name="rQuest[]" value="0">
            <label for="rQuest10">22</label>
            <br>
            <br>
            <button class="btn btn-1__blink-left" type="submit" name="sNext" value="Next!">Дальше </button>

           <?php
           $answersScore = 0;

           function GetAnswersScore(): int
           {
              $totalScore = 0;

              if (isset($_POST['rQuest'])){
                 foreach ($_POST['rQuest'] as $item) {
                    if ($item == '1') {
                       $totalScore += 3;
                    } else {
                       $totalScore += 0;
                    }
                 }
              }
              return $totalScore;
           }
           if(isset($_POST['sNext'])){
              if (isset($_POST['rQuest'])) {
                 $_SESSION['testResult2'] = GetAnswersScore();
                 echo "<script> location.href='page3.php'; </script>";
                 exit;
              }
              else{
                 echo '<div class="warning__text">Not all checkboxes are selected</div>';
              }
           }
           ?>
    </div>
</body>