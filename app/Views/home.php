<?php include('includes/header.php'); ?>

  <div class="container">
    <div class="card mx-auto p-3 child_sub" style="width: 25rem;">
      <h3 class="py-2 text-center mb-4">Login</h3>
      <div class="card-body">
        <form action="home/login" method="post">

          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">email</i></span>
            <input type="email" class="form-control" placeholder="Email Address" name="email" required>
          </div>

          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">fingerprint</i></span>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success" name="submit">Login</button>
          </div>
        </form>
      </div>

      <div class="result text-center"></div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>