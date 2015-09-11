<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body class="serial-list">
<h1>Serials list</h1>
<span class="add"><a href="<?php echo HOME_URL ?>/index.php?action=add_serial_view">+Add serial</a></span>

<div id="serials">
  <?php foreach ($serials['data'] as $serial) : ?>
    <div class="serial">
      <div class="logo"><img src="<?php echo HOME_URL . '/uploads/logos/' . $serial['logo'] ?>" alt=""/></div>
      <div class="title"><h2><?php echo $serial['title'] ?></h2></div>
      <div class="description"><p><?php echo $serial['description'] ?></p></div>
      <div class="date">Date start serial <?php echo $serial['date'] ?></div>
      <div class="button"><a href="<?php echo HOME_URL . '/index.php?action=add_serial_view&serial_id=' . $serial['id'] ?>">Edit Serial</a></div>
      <div class="button"><a href="<?php echo HOME_URL . '/index.php?action=delete_serial&serial_id=' . $serial['id'] ?>">Delete Serial</a></div>
      <div class="button"><a href="<?php echo HOME_URL . '/index.php?action=add_season_view&serial_id=' . $serial['id'] ?>">+ Add season</a></div>
      <?php $seasons = $this->get_season($serial['id']) ?>
      <div class="season">
        <h3> Seasons</h3>
        <?php foreach ($seasons['data'] as $season) : ?>
        <div class="number">
          <span>Season#<?php echo $season['number'] ?></span>
          <a href="<?php echo HOME_URL . '/index.php?action=delete_season&season_id=' . $season['id'] ?>">Delete </a>
          <a href="<?php echo HOME_URL . '/index.php?action=add_season_view&season_id=' . $season['id'] ?>">Edit </a>
        </div>
        <?php $episodes = $this->get_episode($season['id']) ?>
        <?php foreach ($episodes['data'] as $episode) : ?>
          <ul>
            <li>
              <a href="<?php echo $episode['url'] ?>"> Part# - <?php echo $episode['part'] ?> </a>
              <a href="<?php echo HOME_URL . '/index.php?action=delete_episode&episode_id=' . $episode['id'] ?>">Delete </a>
            </li>
          </ul>
        <?php endforeach; ?>
        <div class="bottom"><a
              href="<?php echo HOME_URL . '/index.php?action=add_episode_view&season_id=' . $season['id'] ?>">Add episode</a></div>
      </div>
    <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>
</body>

</html>