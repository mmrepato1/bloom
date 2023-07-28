<?php
$pdo = require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/database/connection.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/bloom/utilities/start_session.php");
?>
<?php include("./partials/header.php"); ?>

<body>
  <?php include("./partials/navbar.php"); ?>

  <div class="px-4 py-5 my-5 text-center" style="background-image: url('/bloom/assets/images/x.jpg'); background-position: center center; background-size: cover; margin: 0 !important; padding: 6rem 1rem !important;">
    <h1 class="display-5 fw-bold">About Us</h1>
    <div class="col-lg-6 mx-auto">
      <p>BloomNbeyond Flowers and Surprises</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class=" col-6 px-4 py-5 my-5 text-center">
        <p>
			Flower ignites feelings of being loved and appreciated, </br> it provides the perfect way to brighten someone’s day!</p>
		<p>
			Whether its love, joy, affection, appreciation, sympathy, romance or apologies; flowers communicate the deepest feelings in the most elegant manner.
		<p>
			With BloomNbeyond, you definitely can't go wrong! <br> Flower bouquets and surprises are specially and carefully </br> arranged and curated. 
		<p>
			Make someone feel special! <br>Order now!
        </p>
		
			<p>
			We offer delivery to your doorstep - anywhere </br> in Puerto Princesa City!
        </p>
		
      </div>
    </div>
  </div>

  <?php include("./partials/footer_section.php"); ?>

</body>

<?php include("./partials/footer.php"); ?>