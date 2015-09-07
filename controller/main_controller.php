<?php

include('model/db.php');


class Main_controller {
  var $db;

  function __construct() {
    $this->db = new db_helper();
  }

  function index() {
    include('view/index.php');
  }

  function login_view() {
    include('view/login_view.php');
  }

  function login() {
    $user = $this->db->select('users', array('user_name' => $_POST['login'], 'password' => md5($_POST['password'])));
    if (empty($user['data'])) {
      header('Location:'.HOME_URL.'/index.php?action=login_view&login=error');
    }else{
      header('Location:'.HOME_URL.'/index.php?action=serial_list_view');
    }
  }

  function serial_list_view() {
    $serials=$this->get_serial();
//    var_dump($serials);
    include('view/serial_list_view.php');
  }

  function add_serial_view() {
    include('view/add_serial_view.php');
  }

  function add_season_view() {
    include ('view/add_season_view.php');
  }

  function add_serial() {
    if (empty($_POST['title']) || empty($_POST['description'])) {
      header('Location:'.HOME_URL.'/index.php?action=add_serial_view&add_serial=add_error');
    }else {
      $uploaddir = './uploads/logos/';
      $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
      copy($_FILES['uploadfile']['tmp_name'], $uploadfile);
      $this->db->insert(
          'serial', array(
              'title'=>$_POST['title'],
              'date'=>$_POST['date'],
              'description'=>$_POST['description'],
              'logo'=>$_FILES['uploadfile']['name']
          )
      );
      header('Location:'.HOME_URL.'/index.php?action=add_season_view');
    }
  }
  function add_season() {
    if(!preg_match("/^[0-9]*$/",$_POST['number']) || empty($_POST['date_start'])) {
      header('Location:'.HOME_URL.'/index.php?action=add_season_view&add_season=add_error');
    }else {
      $this->db->insert(
          'season', array(
              'number'=>$_POST['number'],
              'date_start'=>$_POST['date_start'],
              'date_finish'=>$_POST['date_finish']
          )
      );
      header('Location:'.HOME_URL.'/index.php?action=serial_list_view');
    }
  }



  function get_serial () {
    return $serials=$this->db->select('serial', array());
  }
}
