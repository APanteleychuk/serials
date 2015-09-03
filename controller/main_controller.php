<?php

class Main_controller {

  function index() {
    include('view/index.php');

  }

  function login_view () {
    include('view/login_view.php');
  }

  function test() {
    phpinfo();
  }
}