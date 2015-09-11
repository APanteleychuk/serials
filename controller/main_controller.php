<?php

include('model/db.php');


class Main_controller
{
  var $db;

  function __construct()
  {
    $this->db = new db_helper();
  }

//-------------------------views------------------------------------------
  function index()
  {
    $serials = $this  ->get_serial();
    include('view/index.php');
  }
  function serial_view() {
    $serials = $this  ->get_serial();
    include('view/serial_view.php');

  }

  function serial_list_view()
  {
    $serials = $this->get_serial();
    include('view/serial_list_view.php');
  }

  function login_view()
  {
    session_start();
    if($this->check_login()) {
      header('Location:' . HOME_URL . '/index.php?action=serial_list_view');

    }
    include('view/login_view.php');
  }

  function logout() {
    session_start();
    unset ($_SESSION['logged']);
    header('Location:' . HOME_URL . '/index.php');
  }

  function add_serial_view()
  {
    $serial = array();
    if (isset($_GET['serial_id'])) {
      $serial = $this->db->select('serial', array('id' => $_GET['serial_id']));
    }
    include('view/add_serial_view.php');
  }

  function add_season_view()
  {
    $season = array();
    if (isset($_GET['season_id'])) {
      $season = $this->db->select('season', array('id' => $_GET['season_id']));
    }
    include('view/add_season_view.php');
  }

  function add_episode_view()
  {
    include('view/add_episode_view.php');

  }

  function test() {?>
    <video src="http://backend11.koma.tv:8091/24/Serialck2/09/88/098899.mp4" controls>
      Your browser does not support the <code>video</code> element.
    </video>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/OImnWMc5oZo" frameborder="0" allowfullscreen></iframe>
  <?php }

//-------------------------add-methods----------------------------------------

  function login()
  {
    $user = $this->db->select('users', array('user_name' => $_POST['login'], 'password' => md5($_POST['password'])));
    if (empty($user['data'])) {
      header('Location:' . HOME_URL . '/index.php?action=login_view&login=error');
    } else {
      session_start();
      $_SESSION['logged']= true;
      header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
    }
  }

  function check_login () {
    if (isset ($_SESSION['logged']) && $_SESSION['logged']) {
      return true;
    } else {
      return false ;}
  }

  function add_serial()
  {
    if (empty($_POST['title']) || empty($_POST['description'])) {
      header('Location:' . HOME_URL . '/index.php?action=add_serial_view&add_serial=add_error');
    } else {
      $uploaddir = './uploads/logos/';
      $uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
      copy($_FILES['uploadfile']['tmp_name'], $uploadfile);
      $this->db->insert(
          'serial', array(
              'title' => $_POST['title'],
              'date' => $_POST['date'],
              'description' => $_POST['description'],
              'logo' => $_FILES['uploadfile']['name']
          )
      );
      header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
    }
  }

  function add_season()
  {

    if (!preg_match("/^[0-9]*$/", $_POST['number'])) {
      header('Location:' . HOME_URL . '/index.php?action=add_season_view&add_season=add_error');
    } else {
      if(isset($_POST['serial_id'])&&($_POST['serial_id'])!=='') {
        $this->db->insert(
            'season', array(
                'serial_id' => $_POST['serial_id'],
                'number' => $_POST['number'],
                'date_start' => $_POST['date_start'],
                'date_finish' => $_POST['date_finish']
            )
        );
      }
      else if(isset($_POST['season_id'])&&($_POST['season_id'])!==''){
//        var_dump($_POST);
        $this->db->update(
            'season', array(
                'number' => $_POST['number'],
                'date_start' => $_POST['date_start'],
                'date_finish' => $_POST['date_finish']
            ), array('id'=>$_POST['season_id'])
        );
      }
      header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
    }
  }

  function add_episode()
  {
    if (empty($_POST['part']) || empty($_POST['url'])) {
      header('Location:' . HOME_URL . '/index.php?action=add_episode_view&add_episode=add_error');
    } else {
      $this->db->insert('episode',
          array(
              'part' => $_POST['part'],
              'url' => $_POST['url'],
              'season_id' => $_POST['season_id'])
      );
      header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
    }
  }
//-------------------------update method---------------------------------
  function update_serial()
  {
    if (empty($_POST['title']) || empty($_POST['description'])) {
      header('Location:' . HOME_URL . '/index.php?action=add_serial_view&add_serial=add_error');
    } else {
      $uploaddir = './uploads/logos/';
      $uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
      copy($_FILES['uploadfile']['tmp_name'], $uploadfile);
      $this->db->update(
          'serial', array(
          'title' => $_POST['title'],
          'date' => $_POST['date'],
          'description' => $_POST['description'],
          'logo' => $_FILES['uploadfile']['name']
      ), array('id' => $_REQUEST['serial_id']) //!!!!!!!!!!!!!!!!
      );
      header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
    }
  }
//--------------------------------------delete methods-------------------------------------------
  function delete_serial()
  {
    $this->db->delete('serial', array('id' => $_REQUEST['serial_id']));
    $seasons = $this->get_season($_REQUEST['serial_id']);
    foreach ($seasons['data'] as $season) {
      $this->delete_season($season['id']);
    }
    header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
  }

  function delete_season($season_id)
  {
    if ($_REQUEST['season_id']) {
      $season_id = $_REQUEST['season_id'];
    }
    $this->db->delete('season', array('id' => $season_id));
    $episodes = $this->get_episode($season_id);
    foreach ($episodes['data'] as $episode) {
      $this->delete_episode($episode['id']);
    }
    header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
  }

  function delete_episode($episode_id)
  {
    if ($_REQUEST['episode_id']) {
      $episode_id = $_REQUEST['episode_id'];
    }
    $this->db->delete('episode', array('id' => $episode_id));
    header('Location:' . HOME_URL . '/index.php?action=serial_list_view');
  }





//  ---------------------------get-methods-------------------------------

  function get_serial()
  {
    return $serials = $this->db->select('serial', array());
  }

  function get_season($serial_id)
  {
    return $seasons = $this->db->select('season', array('serial_id' => $serial_id));
  }

  function get_episode($season_id)
  {
    return $episodes = $this->db->select('episode', array('season_id' => $season_id));
  }
}

