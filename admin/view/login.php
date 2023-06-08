<?php
	include('../controller/login.php');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-2">

          <form class="card-body cardbody-color p-lg-5" method="post" action="">
            <div class="text-center">
              <img src="../../view/images/logo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="150px" height="150px" alt="profile">
				<h2 class="pb-3">Tràng An Palace</h2>
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" name="username" aria-describedby="emailHelp"
                placeholder="<?php echo isset($error['username']) ? $error['username'] : 'User Name'; ?>">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" 
			  placeholder="<?php echo isset($error['password']) ? $error['password'] : 'Password'; ?>">
            </div>
            <div class="text-center">
				<input type="submit" value = "Login" name="submit" class="btn btn-info text-white px-5 mb-5 w-100">
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>