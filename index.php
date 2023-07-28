<?php
$pdo = require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/database/connection.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/start_session.php");
?>
<?php include './partials/header.php'; ?>

<body>
  <?php include 'partials/navbar.php'; ?>

  <div class="px-4 py-5 my-5 text-center">
    <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="display-5 fw-bold">BloomNbeyond Flowers and Surprises</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Flower bouquets, Dried flowers, Gifts, Chocolates & many more | </br> ✓ Nationwide Shipping ✓ Cash On Delivery ✓ Cashback </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <?php if (!is_authenticated()) : ?>
          <a href="/bloom/register.php" type="button" class="btn btn-primary btn-lg px-4 gap-3">Register</a>
        <?php endif ?>
        <?php if (is_authenticated()) : ?>
          <a href="/bloom/cart.php" type="button" class="btn btn-primary btn-lg px-4 gap-3">Cart</a>
        <?php endif ?>
        <a href="/bloom/products.php" type="button" class="btn btn-outline-secondary btn-lg px-4">Products</a>
      </div>
    </div>
  </div>

  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-center">Featured Products</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img class="img-thumbnail border-0" src="# " alt="#">
        </div>
        <h3 class="fs-2">PRODUCT 1</h3>
        <p>PRODUCT 1 .........................</p>
        <a href="/bloom/products.php?category_id=1" class="btn btn-primary">
          View
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img class="img-thumbnail border-0" src="# " alt="#">
        </div>
        <h3 class="fs-2">PRODUCT 2</h3>
        <p>PRODUCT 2 ..........................</p>
        <a href="/bloom/products.php?category_id=2" class="btn btn-primary">
          View
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img class="img-thumbnail border-0" src="# " alt="#">
        </div>
        <h3 class="fs-2">PRODUCT 3</h3>
        <p>PRODUCT 3 .......................</p>
        <a href="/bloom/products.php?category_id=3" class="btn btn-primary">
          View
        </a>
      </div>
    </div>

    <?php include("./partials/footer_section.php"); ?>
  </div>

</body>

<?php include './partials/footer.php'; ?>