<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
<h1>Add season</h1>
<form action="<?php echo HOME_URL?>/index.php?action=add_season" method="post">
  <span>Season Number</span><input type="text" name="number"/></br>
  <span>Date start <serial></serial></span><input type="date" name="date_start"/></br>
  <span>Date finish <serial></serial></span><input type="date" name="date_finish"/></br>
  <input type="submit" value="add"/>
</form>


<?php if (isset($_REQUEST['add_season']) && $_REQUEST['add_season']=='add_error') :?>
  <span>Check season number and enter data!</span>
<?php endif?>
</body>

</html>