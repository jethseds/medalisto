<?php session_start(); ?>

<?php

  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 
        $sql = "SELECT COUNT(id) AS dailyreports FROM survey WHERE daily = '".date('Y-m-d')."'";
        $stmt = $this->conn()->query($sql);
        $row = $stmt->fetch();
        $dailyreports = $row['dailyreports'];

        $sql = "SELECT COUNT(id) AS allreports FROM information";
        $stmt = $this->conn()->query($sql);
        $row = $stmt->fetch();
        $allreports = $row['allreports'];

?>
<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<?php include 'navbar.php'; ?>
<?php include 'profile.php'; ?>
<?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Products</li-->
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-lg-6 col-12">
            <div class="small-box" style="background-color: #03a9f4!important;color:#fff;">
              <div class="inner">
                <h3><?php echo $dailyreports; ?></h3>

                <p>Total Daily Report</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="information.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="small-box" style="background-color: #ff5722!important;color:#fff;">
              <div class="inner">
                <h3><?php echo $allreports; ?></h3>

                <p>Total Reports</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="information.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


    <div class="card-body">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="card" style="background-color: white;padding: 10px;">
            <div class="card-body">
              <h4 class="m-3">Analytics Report</h4>
              <canvas id="myChartbar" width="600" height="210"></canvas>
            </div>
          </div>
        </div>
      </div>
      

    </div>
    </section>




     
  </div>
  	<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>All rights reserved</b>
    </div>
     <strong>Copyright &copy; 2022 <!--a href="https://www.facebook.com/BermzISware">Bermz ISware Solutions</a--></strong>
</footer>   


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>

<!-- Active Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


 <?php

  $sql = "SELECT COUNT(id) AS jan FROM information WHERE month = 1 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $jan = $row['jan'];

  $sql = "SELECT COUNT(id) AS feb FROM information WHERE month = 2 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $feb = $row['feb'];

  $sql = "SELECT COUNT(id) AS mar FROM information WHERE month = 3 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $mar = $row['mar'];

  $sql = "SELECT COUNT(id) AS apr FROM information WHERE month = 4 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $apr = $row['apr'];

  $sql = "SELECT COUNT(id) AS may FROM information WHERE month = 5 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $may = $row['may'];

  $sql = "SELECT COUNT(id) AS jun FROM information WHERE month = 6 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $jun = $row['jun'];

  $sql = "SELECT COUNT(id) AS jul FROM information WHERE month = 7 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $jul = $row['jul'];

  $sql = "SELECT COUNT(id) AS aug FROM information WHERE month = 8 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $aug = $row['aug'];

  $sql = "SELECT COUNT(id) AS sep FROM information WHERE month = 9 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $sep = $row['sep'];

  $sql = "SELECT COUNT(id) AS oct FROM information WHERE month = 10 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $oct = $row['oct'];

  $sql = "SELECT COUNT(id) AS nov FROM information WHERE month = 11 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $nov = $row['nov'];

  $sql = "SELECT COUNT(id) AS dece FROM information WHERE month = 12 AND year = '".date('Y-m-d')."'";
  $stmt = $this->conn()->query($sql);
  $row = $stmt->fetch();
  $dece = $row['dece'];

  ?>

<script>
  
let ctx1 = document.getElementById('myChartbar').getContext('2d');

var myChartbar = new Chart(ctx1, {

    type: 'line',


    data: {

        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],

        datasets: [
            {
              data: [<?php echo $jan ?>,<?php echo $feb ?>,<?php echo $mar ?>,<?php echo $apr ?>,<?php echo $may ?>,<?php echo $jun ?>,<?php echo $jul ?>,<?php echo $aug ?>,<?php echo $sep ?>,<?php echo $oct ?>,<?php echo $nov ?>,<?php echo $dece ?>,],
              fill: false,               
              pointBorderColor: "#cee672",
              pointBackgroundColor: "#cee672",
              pointBorderWidth: 0,
              pointHoverRadius: 8,
              pointHoverBorderColor: "#cee672",
              pointHoverBorderWidth: 4,
              pointRadius: 5,
              borderWidth: 4,
              borderColor: "#cee672",
              pointHitRadius: 16,
              tension: 0.5,
            },
        ]

    },

    options: {
      plugins: {
          legend: false
      },
      scales: {
        x: {
          grid: {
            display: false,
          }
        },
        y: {
          grid: {
            display: true,
              borderDash: [8, 4],
              color: "#eaebf1"
          }
        }
      }
    }
});

</script>
<script>


    $(document).on('click', '#admin_profile', function(e){
    e.preventDefault();
    $('#profile').modal('show');
    var user_id = $(this).data('user_id');
    var name = $(this).data('name');
    var email = $(this).data('email');
    var password = $(this).data('password');


    $('#user_id').val(user_id)
    $('#name').val(name)
    $('#email').val(email)
    $('#password').val(password)


    getRow(id);
  });
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;
  
	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>


</body>
</html>

<?php } }

  $data = new data();
  $data->managedata();
            
?>