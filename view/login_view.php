<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <form action="<?php echo HOME_URL?>/index.php?action=login" method="post">
    <input type="text" name="login"/>
    <input type="password" name="password"/>
    <input type="submit" value="login"/>


  </form>
  <?php if (isset($_REQUEST['login']) && $_REQUEST['login']=='error') :?>
      <span> Login/password error</span>
  <?php endif?>
</body>

</html>