<?php require_once 'app/views/templates/headerPublic.php'?>

<?php session_start(); ?>

<main role="main" class="container">
  <div class="page-header" id="banner">
      <div class="row">
        <div>
           <h1>You are not logged in</h1>
        </div>
       </div>
  </div>

	<div class="row">
    <div>
			<form action="/login/verify" method="post" >
				<div class="form-group">
					<label for="username">Username</label>
					<input required type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input required type="password" class="form-control" name="password">
				</div>
	            <br>
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
