<?php

class Create extends Controller {

    public function index() {		
	    $this->view('create/index');
    }
    public function save(){
      session.start();
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if ($password != $confirm_password){
          $result = "Passwords do not match";
        }
        else{
          $user = new User();
          $result = $user->create_user($username, $password);
          if ($result == "Username and Password created successfully"){
            $_SESSION['failed_attempts'] = 0;
            echo '<p><a href = "/login.php"> Go back to login page</a></p>';
          }
        }
      }
    }
}
