<?php
  include('session.php');
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
              <h4>Right Now</h4>
              <div class="clear">
                <ul class="content">
                  <li>Content</li>
                  <li class="purchases"><span class="count">573 </span><a href="#">Purchases</a></li>
                  <li class="users"><span>581 </span><a href="#">Users</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
