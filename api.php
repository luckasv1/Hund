<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tilfældig hund</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="page-header text-center">
    <h1 class="display-2">Dog Api</h1>
    <br>
</div>
<?php
require('json.php');
?>
<div class="container-fluid sections-wrapper">
    <div class="row">    
        <div class="col-sm-offset-0 col-sm-6">
            <p>
            Lorem ipsum dolor sit amet, accumsan dictum vel in, lacinia at erat ultricies, justo nulla ut leo, nunc ut vitae adipiscing convallis.
            Pede quisque diam erat, suspendisse donec vitae ligula inceptos, adipiscing elit purus integer, arcu mauris metus massa.      
            <p>
            <button type="button" class="btn btn-primary btn-lg" onclick='window.location.reload(true);'>Ny hund</button>
        </div>
            <div class="col-sm-6">
                <img height="300px" width="400px" src="<?php echo htmlspecialchars($image); ?>" alt="test" />
            </div>
    </div>
</div>
</body>
</html>
