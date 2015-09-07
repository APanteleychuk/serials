<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <h1>Add serial</h1>
  <form action="<?php echo HOME_URL?>/index.php?action=add_serial" method="post" enctype="multipart/form-data">
    <span>Name Serial</span><input type="text" name="title"/></br>
    <span>Date start serial</span><input type="date" name="date"/></br>
    <span>Description</span><textarea name="description"> </textarea></br>
    <input type="file" name="uploadfile"/></br>
    <input type="submit" value="add"/>
  </form>


  <?php if (isset($_REQUEST['add_serial']) && $_REQUEST['add_serial']=='add_error') :?>
    <span> Serial error</span>
  <?php endif?>
</body>

</html>