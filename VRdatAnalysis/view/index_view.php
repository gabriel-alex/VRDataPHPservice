<?php ob_start(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">
    <?php if(isset($msgErreur)):?>
  <div class="container">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <?=  $msgErreur?>
      </div>
  </div>
  <?php endif ?>
  <div class="container">
    <h1 class="display-3">VR data Analysis toolkit</h1>
    <p>This website is the demonstrator to experiment collection and analysis from VR environment</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Collecting Data</h2>
      <p>Asset, package and script available to simplify the collect of data in VR environment with Unity.</p>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
    </div>
    <div class="col-md-4">
      <h2>Managing</h2>
      <p>Management of data through sql database</p>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
    </div>
    <div class="col-md-4">
      <h2>Analyse data</h2>
      <p>Every experience has something to say. For this reason, we propose easy accessible tools to visualise data before dig in it. </p>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
    </div>
  </div>

  <hr>

</div> <!-- /container -->
<?php $content = ob_get_clean(); ?>

<?php ob_start();
require 'menu_view.php';
$menu= ob_get_clean(); ?>

<?php require 'template.php'; ?>
