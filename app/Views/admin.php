<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php echo link_tag('assets/style.css'); ?>
</head>

<body class="parent_main">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo site_url('admin'); ?>">Admin Panel</a>
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

        <li class="d-flex">
          <a class="btn btn-outline-danger" href="<?php echo site_url('logout'); ?>">Logout</a>
        </li>
      </div>
    </div>
  </nav>

  <?php if (isset($_SESSION['msg'])) : ?>
    <div class="alert <?= $_SESSION['msg-class']; ?> alert-dismissible fade show" role="alert"><?= $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <div class="container">
    <div class="card mx-auto p-3 child_sub" style="width: 25rem;">
      <div class="card-body">
        <h4 class="py-2 text-center mb-4">Welcome to Admin, <?php echo $_SESSION['loginname']; ?></h4>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>