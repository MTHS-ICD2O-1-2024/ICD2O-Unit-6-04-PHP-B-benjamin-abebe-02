<!DOCTYPE html>
<html>
<!-- This is the php version -->
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a sphere, with a Quere String" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Mr. Coxall" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Volume of a sphere, with a Quere String</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a sphere, with a Quere String</span>
      </div>
    </header>
    <form action="./answer.php" method="get">
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./download.jpeg" alt="trapizoid">
      </div>
      <div class="page-content">
        <h2>Formula</h2>
        <h3>V=4/3 πr^3</h3>
        <br />
        <br />
        <div class="page-content-answer">
          The raduis is:
          <div id="radius"></div>
          <div id="area"></div>
        </div>
      </div>
    </main>
    </form>
  </div>
</body>

</html>
