<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
<h1>Add serial</h1>
<!--<form action="--><?php //echo HOME_URL ?><!--/index.php?action=add_serial" method="post" enctype="multipart/form-data">-->
<form action="<?php echo HOME_URL ?>/index.php?action=<?php echo empty($serial)?'add_serial':'update_serial&serial_id='.$serial['data'][0]['id']?>" method="post" enctype="multipart/form-data">
  <span>Name Serial</span>
  <input type="text" name="title" value="<?php echo isset($serial['data'][0]['title']) ? $serial['data'][0]['title'] : '' ?>"/></br>
  <span>Date start serial</span>
  <input type="date" name="date" value="<?php echo isset($serial['data'][0]['date']) ? $serial['data'][0]['date'] : '' ?>"/></br>
  <span>Description</span>
  <textarea name="description"> <?php echo isset($serial['data'][0]['description']) ? $serial['data'][0]['description'] : '' ?></textarea></br>
  <?php echo isset($serial['data'][0]['logo']) ? '<img src="' . HOME_URL . '/uploads/logos/' . $serial['data'][0]['logo'] . '"/>' : '' ?>
  <input type="file" value="" name="uploadfile"/></br>
  <input type="submit" value="add"/>
</form>


<?php if (isset($_REQUEST['add_serial']) && $_REQUEST['add_serial'] == 'add_error') : ?>
  <span> Serial error</span>
<?php endif ?>
</body>

</html>