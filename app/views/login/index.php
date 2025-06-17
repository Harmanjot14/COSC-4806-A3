<?php require_once 'app/views/templates/headerPublic.php'?>

<?php session_start(); ?>

<main role="main" class="login-container">
		<h1>Login Forum</h1>
		<form action="/validate.php" method="post">
			<label for="username">Username:</label>
			<br>
			<input type="text" id="username" name="username">
			<br>
			<label for="password">Password:</label>
			<br>
			<input type="password" id="password" name="password">
			<br><br>
			<button type="submit">Login</button>	
		</form>
			<p>Don't have an account? <a href ="/create/index">Sign up</a></p>
		</div>
	</div>
	
  <?php require_once 'app/views/templates/footer.php' ?>
	
	<?php if (isset($_SESSION['error'])): ?>
		<p style="color: red;"><?php echo $_SESSION['error']; ?></p>
		<?php unset($_SESSION['error']);?>
	<?php endif;?>
