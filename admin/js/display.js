function displayDashboard() {
  var dashboard = document.getElementById('dashboard');
  var purchases = document.getElementById('purchases');
  var users = document.getElementById('users');

  dashboard.style.opacity = 100;
  dashboard.style.width = 1000;
  dashboard.style.height = 1000;

  purchases.style.opacity = 0;
  purchases.style.width = 0;
  purchases.style.height = 0;

  users.style.opacity = 0;
  users.style.width = 0;
  users.style.height = 0;
}

function displayPurchases() {
  var dashboard = document.getElementById('dashboard');
  var purchases = document.getElementById('purchases');
  var users = document.getElementById('users');
  
  dashboard.style.opacity = 0;
  dashboard.style.width = 0;
  dashboard.style.height = 0;

  purchases.style.opacity = 100;
  purchases.style.width = 1000;
  purchases.style.height = 1000;

  users.style.opacity = 0;
  users.style.width = 0;
  users.style.height = 0;
}

function displayUsers() {
  var dashboard = document.getElementById('dashboard');
  var purchases = document.getElementById('purchases');
  var users = document.getElementById('users');

  dashboard.style.opacity = 0;
  dashboard.style.width = 0;
  dashboard.style.height = 0;

  purchases.style.opacity = 0;
  purchases.style.width = 0;
  purchases.style.height = 0;

  users.style.opacity = 100;
  users.style.width = 1000;
  users.style.height = 1000;
}
