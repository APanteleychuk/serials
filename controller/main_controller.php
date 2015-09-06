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
    include('view/serial_list_view.php');
  }

  function add_serial_view() {
    include ('view/add_serial_view.php');
  }

  function add_serial() {
    $serial=$this->db->insert('serial', array('title'=>$_POST['title'], 'description'=>$_POST['description']));
    if (empty($_REQUEST['title']) || empty($_REQUEST['description'])) {
      header('Location:'.HOME_URL.'/index.php?action=add_serial_view&add_serial=add_error');
    }else{
      header('Location:'.HOME_URL.'/index.php?action=serial_list_view');
    }
  }
}
