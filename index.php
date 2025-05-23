<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a sphere" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Volume of a sphere </title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a sphere</span>
      </div>
    </header>
    <h2 class="formula">Formula</h2>
    <p class="formula-body">V = 4/3 π r³</p>
    <br>
  </div>
  <br><br>
  <?php
 // Safely get the radius from the query string
  $radius = isset($_GET['radius']) ? floatval($_GET['radius']) : null;

  // Calculate the volume
 $volume = (4 / 3) * pi() * pow($radius, 3);
  $volumeRounded = round($volume, 2);
  
  // results
  $dimensions = "<ul>\n<li>Volume is " . $volumeRounded . " cm³</li>\n</ul>";
  echo "Volume is:<br>" ."<br>"."<br>". "<br>"."<br>" . $dimensions;
  ?>

  <br>
  <img class="Calculate" src="images/volume-of-sphere.png" alt="Formula of sphere">
</body>

</html>