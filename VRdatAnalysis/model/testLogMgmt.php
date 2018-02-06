<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alex Gabriel">

    <title>VR Data Analysis</title>

    <!-- Bootstrap core CSS-->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/jumbotron.css" rel="stylesheet">

  </head>

  <body>


  <main role="main">
    <div class="container">
      <form class="form-inline" action="LogManagement.php" method="post" id="sub-menu">
        <div class="form-group">
          <label for="user_id">user</label>
          <input type="text" class="form-control" name="user_id" id="user_id" placeholder="user name">
          </select>
        </div>
        <div class="form-group">
          <label for="px">px</label>
          <input type="text" class="form-control" name="px" id="px" placeholder="position X">
          </select>
        </div>
        <div class="form-group">
          <label for="py">py</label>
          <input type="text" class="form-control" name="py" id="py" placeholder="position Y">
          </select>
        </div>
        <div class="form-group">
          <label for="pz">pz</label>
          <input type="text" class="form-control" name="pz" id="pz" placeholder="position Z">
          </select>
        </div>
        <div class="form-group">
          <label for="rx">rx</label>
          <input type="text" class="form-control" name="rx" id="rx" placeholder="rotation X">
          </select>
        </div>
        <div class="form-group">
          <label for="ry">ry</label>
          <input type="text" class="form-control" name="ry" id="ry" placeholder="rotation Y">
          </select>
        </div>
        <div class="form-group">
          <label for="rz">rz</label>
          <input type="text" class="form-control" name="rz" id="rz" placeholder="rotation Z">
          </select>
        </div>
        <div class="form-group">
          <label for="comment">commentaire</label>
          <input type="text" class="form-control" name="comment" id="comment" placeholder="commentaire">
          </select>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
      </form>
    </div>
  </main>

  <footer class="container">
    <p>&copy; Alex Gabriel - LCPI 2017</p>
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="static/js/bootstrap.min.js"></script>
</body>
</html>
