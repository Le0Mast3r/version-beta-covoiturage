
 <?php include('includes/header.php'); ?>

  	<div id="content" class="p-4 p-md-5 pt-5">
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p>lorem</p>
    	<p><a href="./logout.php">Logout</a></p>
    <?php endif ?>
       
      </div>
	  <?php include('includes/footer.php'); ?>

