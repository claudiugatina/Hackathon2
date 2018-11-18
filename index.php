<?php
session_start();

$userinfo = array(
                'user1'=>'password1',
                'user2'=>'password2',
				'alexandra' => '1234'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];header('location: site.html');
    }else {
        //Invalid Login
    }
}
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        ""> -->
<html xmlns="">
   
	
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-design-blocks/1.0.2/css/froala_blocks.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <style type="text/css">
  body{
	  overflow:hidden;
    background-color: #BBBBFFFF;
  }
  </style>
</head>
<body >
<section class="fdb-block"  data-block-type="forms" style=" background-color: #BBBBFFFF;" data-id="1" draggable="true">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-7 col-xl-5 text-center">
        <div class="fdb-box fdb-touch">
          <div class="row">
            <div class="col">
			<?php if($_SESSION['username']): ?>
            <p>Esti logat ca <?=$_SESSION['username']?></p>
            <p><a href="?logout=1">Logout</a></p>
			<?php endif; ?> 
              <h1>Log In</h1>
            </div>
          </div>
		  <form name="login" action="" method="post">
          <div class="row mt-5">
            <div class="col">
              <input type="text" class="form-control" placeholder="User" name="username" value="">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <input type="password" class="form-control mb-1" placeholder="Password" name="password" value="">
              <p class="text-right"><a href="register.php">Intregistrare</a></p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <input type="submit" name="submit" value="Intra" />
            </div>
          </div>
		  </form>
        </div>
      </div>
    </div>
  </div>
</section>
		
</body>
</html>