<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['table']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var jsonData = $.ajax({
    url: "model/data.json",
    dataType: "json",
    async: false
  }).responseText;

  var data = new google.visualization.DataTable(jsonData);

var table = new google.visualization.Table(document.getElementById('table_div'));

table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});

}
</script>

<?php ob_start(); ?>
<div class="container">
  <form class="form-inline" action="index.php" method="post" id="sub-menu">
    <input type="hidden" name="visual" value="table">
    <div class="form-group">
      <label for="user">User</label>
      <select name="user" class="form-control" form="sub-menu">
        <option value="all">All</option>
        <?php foreach ($usersLst as $usr): ?>
          <?php if($usr == $_POST['user']):?>
            <option selected value=<?= $usr?>><?= $usr?></option>
          <?php else: ?>
            <option value=<?= $usr?>><?= $usr?></option>
          <?php endif ?>
        <?php endforeach ?>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>
<div class="container">
  <div class="row" id="table_div">
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php ob_start();
require 'menu_view.php';
$menu= ob_get_clean(); ?>

<?php require 'template.php'; ?>
