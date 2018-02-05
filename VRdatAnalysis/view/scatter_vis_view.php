<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var json =$.ajax({
    url:'model/data.json',
    dataType: 'json',
    async: false
  }).responseText;

  var data = new google.visualization.DataTable(json);


  var options = {
    title: 'Movement over X and Z axis',
    hAxis: {title: 'X', minValue: -2, maxValue: 2}, // , minValue: 0, maxValue: 15
    vAxis: {title: 'Z', minValue: -2, maxValue: 2}, //, minValue: 0, maxValue: 15
    legend: 'none'
  };

  var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

  chart.draw(data, options);
}
</script>


<?php ob_start(); ?>
<div class="container">
  <form class="form-inline" action="index.php" method="post" id="sub-menu">
    <input type="hidden" name="visual" value="scatter">
    <div class="form-group">
      <label for="user">User</label>
      <select name="user" class="form-control" form="sub-menu">
        <option value="all">All</option>
        <?php foreach ($usersLst as $usr): ?>
          <?php if($usr  == $_POST['user']):?>
            <option selected value="<?= $usr?>"><?= $usr?></option>
          <?php else:?>
            <option value="<?= $usr?>"><?= $usr?></option>
          <?php endif?>
        <?php endforeach ?>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>
<div class="container">
  <!-- Example row of columns -->
  <div class="row" style=" height: 500px;" id="chart_div">
    <!--<div id="chart_div" style="width: 900px; height: 500px;"></div>-->
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php ob_start();
require 'menu_view.php';
$menu= ob_get_clean(); ?>

<?php require 'template.php'; ?>
