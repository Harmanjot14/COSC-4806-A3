<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
  </head>
  <body>  
    <h1>Sign Up</h1>
    <form method="post" action="/create/save">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username" required>
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password" required>
      <br>
      <label for="confirm_password">Confirm Password:</label>
      <br>
      <input type="password" id="confirm_password" name="confirm_password" required>
      <br><br>
      <input type="submit" value="Sign Up">
    </form>

    <!__<?php if ($result): ?>
      <p><?php echo $result; ?></p>
    <?php endif;  ?> 

  </body>  
</html>