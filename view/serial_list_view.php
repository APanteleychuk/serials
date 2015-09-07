<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Serials</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>


<body>
  <span><a href="<?php echo HOME_URL?>/index.php?action=add_serial_view">Add serial</a></span>
  <div id="serials">

    <?php foreach($serials['data'] as $serial) :;?>
     <div class="serial">
         <div><h2><?php echo $serial['title']?></h2></div>
         <div class="logo"><img src="<?php echo HOME_URL.'/uploads/logos/'.$serial['logo']?>" alt=""/></div>
         <div class="date">Date start serial <?php echo $serial['date']?></div>
         <div><p><?php echo $serial['description']?></p></div>
     </div>
    <?php endforeach;?>
  </div>


</body>

</html>