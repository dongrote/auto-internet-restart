<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internet Connection Monitor</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
  </head>
  <body>
    <!-- top bar menu -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">Internet Connection Monitor</li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li class="menu-text" id="status"></li>
          <li><button type="button" class="button">Refresh</button></li>
        </ul>
      </div>
    </div>

    <!-- body -->
    <div class="row">
      <div class="small-8 medium-8 large-8 columns"><h3>Current Power State</h3></div>
      <div class="small-4 medium-4 large-4 columns" id="power-state"><i class="fa fa-spinner fa-2x fa-spin" aria-hidden="true"></i></div>
    </div>

    <table>
      <thead>
        <tr>
          <th>Internet Down Messages</th>
        </tr>
      </thead>
      <tbody id="failed-messages">
      </tbody>
    </table>

    <!-- load javascripts -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
