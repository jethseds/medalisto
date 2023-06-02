<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
<aside class="main-sidebar" style="overflow-y: auto;bottom: 0;">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <!-- <li class="header">MENU</li> -->
      <li class="header" style="background-color: #fff;color: #cee672;text-align: center;"><img src="../images/logo.png" width="130px"></li>
      <?php if(isset($_SESSION['users_id'])): ?>
      <li><a href="dashboard.php" style="color: #cee672;"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a></li>
<!--       <li><a href="dailyreports.php" style="color: #cee672;"><i class="fas fa-list"></i> <span> Daily Reports</span></a></li>
      <li><a href="allreports.php" style="color: #cee672;"><i class="fas fa-list"></i> <span> All Reports</span></a></li> -->
      <li><a href="information.php" style="color: #cee672;"><i class="fas fa-users"></i> <span> Survey</span></a></li>
    </ul>
  </section>
  <?php endif; ?>
</aside>
