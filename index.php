<?php
    require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Доступ к бизону</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container mt-4">
      <h1>Доступ к бизону</h1>
      <form action="vendor/check.php" method="post">
        <h5>Email</h5>
        <input
          type="text"
          class="form-control"
          name="email"
          id="email"
          placeholder="Email"
        /><br />
        <h5>API-токен</h5>
        <input
          type="text"
          class="form-control"
          name="APItoken"
          id="APItoken"
          placeholder="secretKey"
        /><br />
        <!-- <input type="submit" value="Отправить" /> -->
        <button type="submit" class="btn btn-success">Сохронить</button>
      </form>
    </div>
  </body>
</html>
