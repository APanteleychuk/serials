<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body class="one-serial">
<div class="header">
</div>
  <?php $serials = $this->get_serial() ?>
  <?php foreach ($serials['data'] as $serial) : ?>
  <?php echo $serial['id'] ==$_GET['serial_id']?'<div class="title"><h1>'.$serial['title'].'</h1></div>':''?>

<!--<div class="content">-->
<!--  <div class="serial">-->
    <?php echo $serial['id'] == $_GET['serial_id'] ? '<div class="logo"><img src="'.HOME_URL . '/uploads/logos/' . $serial['logo'].'" alt=""/></div>':''?>
    <?php echo $serial['id'] == $_GET['serial_id'] ?'<div class="description">'.$serial['description'].'</div>' :''?>
     <?php echo ($serial['id'] == $_GET['serial_id'])? '<div class="date">Date start serial'.$serial['date'].'</div>':''?>
<!--  </div>-->
<!--  </div>-->
    <?php $seasons = $this->get_season($serial['id']) ?>
    <?php foreach ($seasons['data'] as $season) : ?>


      <?php echo $serial['id'] == $_GET['serial_id'] ?'<div class="number">Season#'. $season['number'].'</div>' :''?>

    <?php $episodes = $this->get_episode($season['id']) ?>
    <?php foreach ($episodes['data'] as $episode) : ?>
          <div class="part"> <a href="<?php echo $serial['id'] == $_GET['serial_id'] ? $episode['url'] :''?>"><?php echo $serial['id'] == $_GET['serial_id'] ?'Part# - '. $episode['part'] :''?> </a></div>
    <?php endforeach; ?>
  <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
</div>
</body>


</html>
