<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Registration with CI4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php echo link_tag('assets/style.css'); ?>
</head>

<body class="parent_main">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">Login & Register</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('register'); ?>">SignUp</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="card mx-auto p-3 child_sub" style="width: 25rem;">
      <h3 class="py-2 text-center mb-4">Login</h3>
      <div class="card-body">
        <form action="post.php" method="post">

          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">email</i></span>
            <input type="email" class="form-control" placeholder="Email Address" name="email">
          </div>

          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">fingerprint</i></span>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success" name="submit">Login</button>
          </div>
        </form>
      </div>

      <div class="result text-center"></div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>