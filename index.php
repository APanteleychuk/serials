<?php

include('config.php');
include('controller/main_controller.php');


$main_controller= new Main_controller();
//phpinfo(INFO_VARIABLES);

if(!$_REQUEST['action'] || $_REQUEST['action']=='') {
  $main_controller->index();
}

if($_REQUEST['action'] || $_REQUEST['action']!=='') {
  $main_controller->{$_REQUEST["action"]}();
}