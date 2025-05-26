<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a sphere, with a Query String" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Volume of a Sphere</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Sphere</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <h2>Formula</h2>
        <h3>V = 4/3 × π × r³</h3>
        <br />
        <?php
        $r = $_GET["radius"];
        $v = (4 / 3) * pi() * ($r * $r * $r);
        echo "<p>Radius: $r cm</p>";
        echo "<p>Volume: $v cm³</p>";
        ?>
      </div>
    </main>
  </div>
</body>

</html>