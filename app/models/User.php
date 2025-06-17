<?php

Class User {

  public $username;
  public $password;
  public $auth = false;

  public function __construct() {
        
  }

  public function test () {
    $db = db_connect();
    $statement = $db->prepare("select * from users;");
    $statement->execute();
    $rows = $statement->fetch(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function authenticate($username, $password) {
      /*
       * if username and password good then
       * $this->auth = true;
      */
  	$username = strtolower($username);
  	$db = db_connect();
    $statement = $db->prepare("select * from users WHERE username = :name;");
    $statement->bindValue(':name', $username);
    $statement->execute();
    $rows = $statement->fetch(PDO::FETCH_ASSOC);
  		
    if (password_verify($password, $rows['password'])) {
    	$_SESSION['auth'] = 1;
    	$_SESSION['username'] = ucwords($username);
    	unset($_SESSION['failedAuth']);
    	header('Location: /home');
    	die;
  	} else {
  			if(isset($_SESSION['failedAuth'])) {
  				$_SESSION['failedAuth'] ++; //increment
  			} else {
  				$_SESSION['failedAuth'] = 1;
  			}
  			header('Location: /login');
  			die;
  		}
    }
  /* to create a new user*/
  public function create_user($username, $password){
    $db = db_connect();
    /*to check if username already exists*/
    $statement = $db->prepare("select * from users where username = :username;");
    $statement->execute(['username' => $username]);
    $rows = $statement->fetch(PDO::FETCH_ASSOC);
    if ($rows){
      return "Username already exists";
    }
    /*validate password is at least 10 characters*/
    if (strlen($password) < 10 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password))
      return "Password must be at least 10 characters, contain at least one uppercase letter and one lowercase letter";
  
    /*hashed password*/
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  
    /*create a new user*/
    $statement = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password);");
    $statement->execute(['username' => $username, 'password' => $hashedPassword]);
    return "Username and Password created successfully";
}

}
