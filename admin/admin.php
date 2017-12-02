<?php
  // include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>codeTode&#40;admin&#41;&#59;</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script type="text/javascript" src="js/display.js"></script>
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
        </div>
      </div>
    </div>
  </body>
</html>
