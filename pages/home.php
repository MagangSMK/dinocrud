<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  <body bgcolor="#e9f0ff">

  <?php
    session_start();
  ?>
    
    <h1>
      Selamat Datang <span style="color:#6e85ad;"><?= $_SESSION['username'];?>!</span>
    </h1>
    <h2>My Dashboard</h2>
    <h3>Apa yang ingin anda lakukan hari ini!</h3>
  </body>
</html>
