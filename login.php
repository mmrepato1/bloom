<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/start_session.php");
?>
<?php
$pdo = require("{$_SERVER['DOCUMENT_ROOT']}/bloom/database/connection.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/services/auth_service.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/functions.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/auth_utilities.php");

$login_error = null;


if ($_SERVER['REQUEST_METHOD'] === 'GET' && is_authenticated()) {
  redirect("/bloom/index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $loginUserResponse = loginUser($email, $password);
  if ($loginUserResponse["status"]) {
    redirect("/bloom/index.php");
  } else {
    $login_error = $loginUserResponse["message"];
  }
}

?>

<?php include './partials/header.php'; ?>

<body>
  <?php include 'partials/navbar.php'; ?>

  <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100%;">
      <div class="col-6 ">
        <h1 class="mb-2">Login</h1>
        <form method="POST" action="/bloom/login.php">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="email" type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input name="password" type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
          </div>

          <!-- Login Errors -->
          <?php if ($login_error) : ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $login_error; ?>
            </div>
          <?php endif; ?>

          <!-- Link to Register Page -->
          <p><a class="d-block text-end" href="register.php">Register instead.</a></p>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

        </form>
      </div>
    </div>
  </div>
  <!-- MDB -->
</body>

<?php include './partials/footer.php'; ?>