<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    aaa
    <script src="./assets/js/app.js"></script>

</body>
</html> -->

<?php

require 'function.php';

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$cal = new \MyApp\Calendar();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Calendar</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <table>
    <thead>
      <tr>
        <th><a href="/?t=<?php echo h($cal->prev); ?>">&laquo;</a></th>
        <th colspan="5"><?php echo h($cal->yearMonth); ?></th>
        <th><a href="/?t=<?php echo h($cal->next); ?>">&raquo;</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sun</td>
        <td>Mon</td>
        <td>Tue</td>
        <td>Wed</td>
        <td>Thu</td>
        <td>Fri</td>
        <td>Sat</td>
      </tr>
      <?php $cal->show(); ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="7"><a href="/">Today</a></th>
      </tr>
    </tfoot>
  </table>
</body>
</html>