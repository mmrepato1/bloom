<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/start_session.php");
$pdo = require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/database/connection.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/services/product_service.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/services/category_service.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/services/user_service.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/functions.php");
?>

<?php

if (!isAuthenticated() || !isAdmin()) {
  redirect("/bloom/index.php");
}

$customers_count = get_customer_count();
$products_count = get_product_count();
$categories_count = get_category_count();

?>

<?php include("../partials/header.php"); ?>

<?php include("../partials/admins_sidebar.php") ?>

<div class="container" style="height: 100%;">
  <h1>Dashboard</h1>

  <div class="row" style="height: 100%;">

    <div class="col-md-6 text-center p-2">
      <div class="rounded bg-primary text-white p-4" style="height: 100%;">
        <h1><?php echo ($products_count) ?></h1>
        <h5>Products</h5>
      </div>
    </div>
    <div class="col-md-6 text-center p-2">
      <div class="rounded bg-secondary text-white p-4" style="height: 100%;">
        <h1><?php echo ($categories_count) ?></h1>
        <h5>Categories</h5>
      </div>
    </div>
    <div class="col-md-6 text-center p-2 ">
      <div class="rounded bg-danger text-white p-4" style="height: 100%;">
        <h1><?php echo ($customers_count) ?></h1>
        <h5>Customers</h5>
      </div>
    </div>
    <div class="col-md-6 text-center p-2 ">
      <div class="rounded bg-success text-white p-4" style="height: 100%;">
        <h1><?php echo (0) ?></h1>
        <h5>Orders</h5>
      </div>
    </div>

  </div>

</div>

<?php include("../partials/admins_sidebar_closing.php"); ?>

<?php include("../partials/footer.php"); ?>