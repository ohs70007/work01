<?php
    require_once 'func.php';
  ?>

<!DOCTYPE HTML>
<html>

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="css/default.css" rel="stylesheet" type="text/css">
    <title>welcome</title>
  </head>

  <body>

    <table>
        <tr>
            <th>氏名</th>
            <td><input type='text' name='name' value=<?php $_GET['name']?>></td>
        </tr>

        <tr>
            <th>Tel</th>
            <td><input type='text' name='tel' value=<?php $_GET['tel']?>></td>
        </tr>

        <tr>
            <th>Mail</th>
            <td><input type='text' name='mail' value=<?php $_GET['mail']?>></td>
        </tr>
    </table>

      <input
      type='submit'
      name='send'
      value='確認'>

  </body>

</html>
