<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <!-- Internal CSS -->
        <style>
          body{
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
          }
          .navbar{
              background-color: lightgray;
              margin: 0;
              padding: 10px;
              display: flex;
              justify-content: space-between;
              align-items: center;
              border-bottom: 2px solid black;
          }
          .navbar-brand{
              font-size: 24px;
              font-weight: bold;
              color: black;
          }
          .navbar ul{
            list-style: none;
            padding: 0;
            margin: 100;
            display: flex;
            gap: 15px;
          }
          .navbar li{
            position: relative;
          }
          .navbar a{
            text-decoration: none;
            color: black;
            font-size: 18px;
          }
          .navbar a:hover{
            background-color: #f5f5f5;
          }
          .dropdown-menu{
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid black;
            top: 100%;
            left: 0;
            width: 180px;
            list-style: none;
          }
          .footer{
            color: gray;
            
          } 
        </style>
    </head>
    <body>
      <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">COSC 4806</a>
          <ul>
            <li class="nav-item"><a href="/home">Home</a></li>
            <li class="nav-item"><a href="/about">About Me</a></li>
            <li class="nav-item">
              <a href="#" class="dropdown-toggle">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </nav>
     <script>
        document.addEventListener('DOMContentLoaded', function(){
          var dropdown = document.querySelector('.dropdown-toggle');
          var menu = dropdown.nextElementSibling;
          menu.style.display = 'none';

          dropdown.addEventListener('click', function(event){
            event.preventDefault();
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
          });
        });
      </script>
   