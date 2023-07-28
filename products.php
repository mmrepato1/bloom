<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/start_session.php");
?>
<?php include("./partials/header.php"); ?>

<?php
$pdo = require("{$_SERVER['DOCUMENT_ROOT']}/bloom/database/connection.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/services/category_service.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/services/product_service.php");

$categories = get_all_categories();
$products = get_all_products();
$category_id = null;

if (isset($_GET['category_id'])) {
  $category_id = $_GET['category_id'];
  $products = get_products_by_category_id($category_id);
}

?>

<body>

  <?php include("./partials/navbar.php"); ?>

  <div class="container mb-4">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="btn-group d-flex" role="group" aria-label="Basic example">
          <?php if ($category_id == null) { ?>
            <a href="/bloom/products.php" class="flex-grow-1 btn btn-primary">All</a>
          <?php } else { ?>
            <a href="/bloom/products.php" class="flex-grow-1 btn btn-outline-primary">All</a>
          <?php } ?>

          <?php
          foreach ($categories as $category) {
            $category_name = $category['name'];
            $categoryid = $category['id'];
            if ($category_id == $categoryid) {
              echo "<a href='/bloom/products.php?category_id={$categoryid}' class='flex-grow-1 btn btn-primary'>{$category_name}</a>";
            } else {
              echo "<a href='/bloom/products.php?category_id={$categoryid}' class='flex-grow-1 btn btn-outline-primary'>{$category_name}</a>";
            }
          }
          ?>

        </div>
      </div>
    </div>
  </div>

  <section style="background-color: #eee;">
    <div class="text-center container py-5">
      <h4 class="mt-2 mb-5"><strong>Products</strong></h4>
      <div class="row">

        <?php foreach ($products as $product) { ?>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                <img src="<?php echo ($product["image"]) ?>" class="w-100" />
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3"><?php echo ($product["name"]) ?></h5>
                </a>
                <a href="" class="text-reset">
                  <p><?php echo ($product["category_name"]) ?></p>
                </a>
                <h6 class="mb-3">PHP <?php echo ($product["price"]) ?></h6>
              </div>
              <div class="card-footer d-flex gap-1 justify-content-center">
                <form method="POST" action="/bloom/cart.php">
                  <input type="hidden" name="product_id" value="<?php echo ($product["id"]) ?>" />
                  <button type="submit" name="_action" value="add_to_cart" value="<?php echo ($product["id"]) ?>" class="btn btn-success">Add to Cart</button>
                </form>
                <a href="/bloom/product.php?product_id=<?php echo ($product["id"]) ?>" class="btn btn-outline-success">View Product</a>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>

  <?php include("./partials/footer_section.php"); ?>

</body>

<?php include("./partials/footer.php"); ?>