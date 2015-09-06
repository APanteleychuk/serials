<?php

include('config.php');
include('controller/main_controller.php');


$main_controller= new Main_controller();


if(!isset($_REQUEST['action']) || $_REQUEST['action']=='') {
  $main_controller->index();
} else {
  $main_controller->{$_REQUEST["action"]}();
}
