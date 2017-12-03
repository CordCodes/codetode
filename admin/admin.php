<?php
  session_start();
  if (isset($_SESSION['logged'])) {} else{
    header('Location:index.php');
  }
  if (isset($_POST['logout'])) {
    unset($_SESSION['logged']);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>codeTode&#40;admin&#41;&#59;</title>
    <script type="text/javascript" src="js/canvasjs.min.js"></script>
    <script type="text/javascript" src="js/display.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link id="css" rel="stylesheet" type="text/css" href="css/chart.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  </head>
  <body>
    <div class="admin-panel clear">
      <div class="sidebar">
        <div class="logo">
          <a href="#" class="disabled"></a>
        </div>
        <ul>
          <li><a onclick="displayDashboard()" class="half-disabled">Dashboard</a></li>
          <li><a onclick="displayPurchases()" class="half-disabled">Purchases</a></li>
          <li><a onclick="displayUsers()" class="half-disabled">Users</a></li>
          <li><a onclick="displayChart()" class="half-disabled">Sales</a></li>
          <li>
            <form action="admin.php" method="post">
              <input type="hidden" name="logout" value="true">
              <button type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
      <div class="main">
        <div class="main-content clear">
          <div id="dashboard">
            <h2 class="header"><span class="icon"></span>Dashboard</h2>
            <div class="monitor">
              <h4>Current Overview</h4>
              <div class="clear">
                <ul class="content">
                  <li>Content</li>
                  <li class="purchases"><span class="count">573 </span><a class="half-disabled">Purchases</a></li>
                  <li class="users"><span>581 </span><a class="half-disabled">Users</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="purchases">
            <h2 class="header"><span class="icon"></span>Purchases</h2>
            <div class="monitor">
              <h4>Recent Purchases</h4>
              <div class="clear">
                <ul class="content">
                  <li>Content</li>
                  <li class="purchases"><span class="count">User123</span><a class="half-disabled"> bought 2 codeTode(); mugs</a></li>
                  <li class="purchases"><span class="count">testing</span><a class="half-disabled"> bought 5 codeTode(); shirts</a></li>
                  <li class="purchases"><span class="count">_johnX_</span><a class="half-disabled"> bought 1 codeTode(); laptop sticker</a></li>
                  <li class="purchases"><span class="count">gerald9</span><a class="half-disabled"> bought 2 codeTode(); shirts</a></li>
                  <li class="purchases"><span class="count">coding3</span><a class="half-disabled"> bought 1 codeTode(); laptop sticker</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="users">
            <h2 class="header"><span class="icon"></span>Users</h2>
            <div class="monitor">
              <h4>Recent Users</h4>
              <div class="clear">
                <ul class="content">
                  <li>Content</li>
                  <li class="users"><span class="count">User123</span><a class="half-disabled"> registered 1 day ago</a></li>
                  <li class="users"><span class="count">testyay</span><a class="half-disabled"> registered 2 days ago</a></li>
                  <li class="users"><span class="count">fakeacc</span><a class="half-disabled"> registered 4 days ago</a></li>
                  <li class="users"><span class="count">gerald9</span><a class="half-disabled"> registered 5 days ago</a></li>
                  <li class="users"><span class="count">cTfan12</span><a class="half-disabled"> registered 6 days ago</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="chart">
            <h2 class="header"><span class="icon"></span>Sales</h2>
            <div class="monitor" id="chart-monitor"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
