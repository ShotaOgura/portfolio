<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>送信完了</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <!-- <?php ?>でhtml内にphpの記述ができる -->
  <!-- フォームで送られてきた値は$_POSTで受け取れる -->
  <!-- <input>もしくは<textarea>で指定したname属性が$_POST['name']のようにキー名になる -->
    <?php
      echo "メールアドレス：".$_POST['email'].'<br>';
    ?>

    <?php
      echo "性別：".$_POST['sex'].'<br>';
    ?>

    <?php
      echo "誕生日：".$_POST['month']."月".$_POST['date'].'日<br>';
    ?>

    <?php
      echo "内容：".$_POST['body'].'<br>';
    ?>
</body>
</html>
