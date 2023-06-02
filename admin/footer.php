<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Moment JS -->
<script src="../bower_components/moment/moment.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script src="assets/js/fontawesome.js"></script>

<script>
  $('.courses_btn').click(function(){
    $('.courses').toggleClass('courses_show')
    $('.track').removeClass('track_show')
  })
  $('.track_btn').click(function(){
    $('.track').toggleClass('track_show')
    $('.courses').removeClass('courses_show')
  })

  $('.track1_btn').click(function(){
    $('.track1').toggleClass('track1_show')
    $('.track2').removeClass('track2_show')
    $('.track3').removeClass('track3_show')
  })
  $('.track2_btn').click(function(){
    $('.track2').toggleClass('track2_show')
    $('.track1').removeClass('track1_show')
    $('.track3').removeClass('track3_show')
  })
  $('.track3_btn').click(function(){
    $('.track3').toggleClass('track3_show')
    $('.track2').removeClass('track2_show')
    $('.track1').removeClass('track1_show')
  })
</script>