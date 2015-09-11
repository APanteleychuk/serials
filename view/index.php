<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Serials</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>

  <body class="front">
  <div class="header">
      <span class="left">
        <a href="<?php echo HOME_URL?>/index.php?action=login_view">Login</a>
      </span>
      <span class="right">
        <a href="<?php echo HOME_URL?>/index.php?action=logout">Logout</a>
      </span>
    <div class="title"><h1>Test Task</h1></div>
  </div>
  <div class="content">
    <div id="serials">
      <h2>Serials</h2>
      <?php foreach ($serials['data'] as $serial) : ?>
      <a href="<?php echo HOME_URL . '/index.php?action=serial_view&serial_id='. $serial['id'] ?>">
      <div class="serial">
          <div class="logo"><img src="<?php echo HOME_URL . '/uploads/logos/' . $serial['logo'] ?>" alt=""/></div>
          <div class="title"><h2><?php echo $serial['title'] ?></h2></div>
      </div>
      <?php endforeach; ?>
      </a>
    </div>

    <footer class="footer" ></footer>
    </div>
  </body>


</html>
