<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
<h1>Add episode</h1>

<form action="<?php echo HOME_URL ?>/index.php?action=add_episode" method="post">
  <span>Part</span><input type="number" name="part"/></br>
  <span>Url</span><input type="text" name="url"/></br>
  <input type="hidden" name="season_id" value="<?php echo $_GET['season_id'] ?>">
  <input type="submit" value="add"/>
</form>


<?php if (isset($_REQUEST['add_episode']) && $_REQUEST['add_episode'] == 'add_error') : ?>
  <span> Episode error</span>
<?php endif ?>
</body>

</html>