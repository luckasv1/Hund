<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Api Hund</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_modal.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="http://www.luckas.dk">Api hund</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://www.luckas.dk">Luckas.dk
                <span class="sr-only">(current)</span>
              </a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="display-2">Api hund</h1>
          <br>
          <?php
            require('json.php');
          ?>
            <div class="content">    
                                               
              <div class="item featured text-center">
                <div class="featured-image">
                                                      
                  <!-- The Modal -->
                   
                  <img id="myImg" src="<?php echo htmlspecialchars($image); ?>" height="300px" width="300px">
                   
                  <!-- Trigger the modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                      <div id="caption"></div>
                    </div> 
                                    
                  </div><!--//desc-->                                                            
              </div><!--//item-->                                   
            </div><!--//content--> 
          <br>
          <button type="button" class="btn btn-primary btn-lg" onclick='window.location.reload(true);'>Ny hund</button>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="index_modal.js"></script>
  </body>

</html>