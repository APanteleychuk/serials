<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <span>Add serial</span>
  <form action="<?php echo HOME_URL?>/index.php?action=add_serial" method="post">
    <input type="text" name="title"/>
    </br>
    <textarea name="description"> </textarea>
    </br>
    <input type="submit" value="add"/>
  </form>

  <span>Add season</span>
  <form action="<?php echo HOME_URL?>/index.php?action=add_serial" method="post">
    <input type="text" name="title"/>
    </br>
    <textarea name="description"> </textarea>
    </br>
    <input type="submit" value="add"/>
  </form>

  <?php if (isset($_REQUEST['add_serial']) && $_REQUEST['add_serial']=='add_error') :?>
    <span> Serial error</span>
  <?php endif?>
</body>

</html>