<?php session_start(); ?>

<?php
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 
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
        Survey Answer
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Products</li-->
        <li class="active">Survey Answer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <?php
                $sql = "SELECT * FROM survey WHERE code = '".$_GET['code']."'";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
              ?>
            <div class="box-header with-border">
              <ul>
                <li style="list-style: none;"><p>Do you own a smartphone, tablet/ ipad that has a QR Code scanner?</p>
                  <ul>
                    <li><input type="radio" name="usedevice" <?php if ($row['usedevice'] == 'Yes') {echo "checked";} ?>> Yes</li>
                    <li> <input type="radio" name="usedevice" <?php if ($row['usedevice'] == 'No') {echo "checked";} ?>> No</li>
                  </ul>
                </li>
                <li><p>When did you send your report to the FDA?</p>
                  <ul>
                    <li><?php echo $row['date'] ?></li>
                  </ul>
                </li>
                <li><p>What MedAlisto intervention did you use?</p>
                  <ul>
                    <li><?php echo $row['intervention'] ?></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <table class="table border">
              <thead>
                <tr>
                  <th>While using this intervention</th>
                  <th>Strongly agree</th>
                  <th>Agree</th>
                  <th>Neither Agree</th>
                  <th>Disagree</th>
                  <th>Strongly Disagree</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Awareness</td>
                  <td><input type="radio" <?php if ($row['awareness'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awareness'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awareness'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awareness'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awareness'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  I am already aware of where to report</td>
                  <td><input type="radio" <?php if ($row['awarenessq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  I already know how to submit my report.</td>
                  <td><input type="radio" <?php if ($row['awarenessq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  I am familiar with e-reporting.</td>
                  <td><input type="radio" <?php if ($row['awarenessq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  I am aware about the system because I had encountered the same before. </td>
                  <td><input type="radio" <?php if ($row['awarenessq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['awarenessq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>

                <tr>
                  <td>Diffidence</td>
                  <td><input type="radio" <?php if ($row['diffidence'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidence'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidence'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidence'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidence'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  I am already aware of where to report</td>
                  <td><input type="radio" <?php if ($row['diffidenceq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  I already know how to submit my report.</td>
                  <td><input type="radio" <?php if ($row['diffidenceq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  I am familiar with e-reporting.</td>
                  <td><input type="radio" <?php if ($row['diffidenceq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  I am aware about the system because I had encountered the same before. </td>
                  <td><input type="radio" <?php if ($row['diffidenceq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>5. This reporting system is not easy to use and follow.</td>
                  <td><input type="radio" <?php if ($row['diffidenceq5'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq5'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq5'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq5'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq5'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>6.  This reporting system is easy to use and follow.</td>
                  <td><input type="radio" <?php if ($row['diffidenceq6'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq6'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq6'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq6'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq6'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>7.  I would like to use this reporting system again.</td>
                  <td><input type="radio" <?php if ($row['diffidenceq7'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq7'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq7'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq7'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq7'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>8.  I would not like to use this reporting system again.</td>
                  <td><input type="radio" <?php if ($row['diffidenceq8'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq8'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq8'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq8'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['diffidenceq8'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>

                <tr>
                  <td>Lethargy</td>
                  <td><input type="radio" <?php if ($row['lethargy'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargy'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargy'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargy'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargy'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  This reporting system is time-consuming.</td>
                  <td><input type="radio" <?php if ($row['lethargyq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  This reporting system is not time-consuming</td>
                  <td><input type="radio" <?php if ($row['lethargyq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  This reporting system requires too much effort and is laborious</td>
                  <td><input type="radio" <?php if ($row['lethargyq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  This reporting system does not require too much effort and is easy to use</td>
                  <td><input type="radio" <?php if ($row['lethargyq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>5.  I feel tired after using this reporting system</td>
                  <td><input type="radio" <?php if ($row['lethargyq5'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq5'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq5'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq5'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq5'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>6.  I do not feel tired after using this reporting system</td>
                  <td><input type="radio" <?php if ($row['lethargyq6'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq6'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq6'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq6'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['lethargyq6'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>

                <tr>
                  <td>Fear</td>
                  <td><input type="radio" <?php if ($row['fear'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fear'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fear'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fear'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fear'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  I do not feel secure and safe using this reporting system. </td>
                  <td><input type="radio" <?php if ($row['fearq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  I feel secure and safe using this reporting system.</td>
                  <td><input type="radio" <?php if ($row['fearq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  I  do not feel comfortable with sharing my information using this reporting system.</td>
                  <td><input type="radio" <?php if ($row['fearq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  I feel comfortable with sharing my information using this reporting system.</td>
                  <td><input type="radio" <?php if ($row['fearq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['fearq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>

                <tr>
                  <td>Culpability</td>
                  <td><input type="radio" <?php if ($row['culpability'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpability'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpability'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpability'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpability'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  I need assistance to use this reporting system.</td>
                  <td><input type="radio" <?php if ($row['culpabilityq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  I do not need assistance to use this reporting system.</td>
                  <td><input type="radio" <?php if ($row['culpabilityq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  I do not feel comfortable asking for assistance with this reporting system.</td>
                  <td><input type="radio" <?php if ($row['culpabilityq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  I feel comfortable asking for assistance with this reporting system.</td>
                  <td><input type="radio" <?php if ($row['culpabilityq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['culpabilityq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>

                <tr>
                  <td>Ambition</td>
                  <td><input type="radio" <?php if ($row['ambition'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambition'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambition'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambition'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambition'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  I would not prefer to use this reporting system again.</td>
                  <td><input type="radio" <?php if ($row['ambitionq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  I would prefer using this reporting system again.</td>
                  <td><input type="radio" <?php if ($row['ambitionq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  I would prefer not to report Adverse Drug Events again.</td>
                  <td><input type="radio" <?php if ($row['ambitionq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  I would still prefer to report Adverse Drug Events with this reporting system.</td>
                  <td><input type="radio" <?php if ($row['ambitionq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['ambitionq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>

                <tr>
                  <td>Complacency</td>
                  <td><input type="radio" <?php if ($row['complacency'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacency'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacency'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacency'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacency'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>1.  I do not feel like my report is needed by the FDA.</td>
                  <td><input type="radio" <?php if ($row['complacencyq1'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq1'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq1'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq1'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq1'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>2.  I believe that my report is needed by the FDA.</td>
                  <td><input type="radio" <?php if ($row['complacencyq2'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq2'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq2'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq2'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq2'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>3.  I believe my report will not reach the FDA</td>
                  <td><input type="radio" <?php if ($row['complacencyq3'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq3'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq3'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq3'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq3'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>4.  I believe my report will reach the FDA</td>
                  <td><input type="radio" <?php if ($row['complacencyq4'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq4'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq4'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq4'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq4'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>5.  I do not believe that my report is significant.</td>
                  <td><input type="radio" <?php if ($row['complacencyq5'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq5'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq5'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq5'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq5'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>6.  I believe my report is significant.</td>
                  <td><input type="radio" <?php if ($row['complacencyq6'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq6'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq6'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq6'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq6'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>7.   The intervention is well integrated.</td>
                  <td><input type="radio" <?php if ($row['complacencyq7'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq7'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq7'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq7'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq7'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>8.  I would rather share the report myself by mouth/ through social media.</td>
                  <td><input type="radio" <?php if ($row['complacencyq8'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq8'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq8'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq8'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq8'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>9.   This intervention is especially beneficial for persons who enjoy typing their complaints.</td>
                  <td><input type="radio" <?php if ($row['complacencyq9'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq9'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq9'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq9'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq9'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                <tr>
                  <td>10.  My report does not matter as O think all drugs on the market are already safe.</td>
                  <td><input type="radio" <?php if ($row['complacencyq10'] == 'Strongly agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq10'] == 'Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq10'] == 'Neither Agree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq10'] == 'Disagree') {echo "checked";} ?> ></td>
                  <td><input type="radio" <?php if ($row['complacencyq10'] == 'Strongly Disagree') {echo "checked";} ?> ></td>
                </tr>
                
              </tbody>
            </table>
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
         <strong>Copyright &copy; 2023 <!--a href="https://www.facebook.com/BermzISware">Bermz ISware Solutions</a--></strong>
    </footer>    <!-- Add -->


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>

<!-- Active Script -->
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
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    })
</script>

</body>
</html<?php 

                          

                      }
                        
                  }

                    $data = new data();
                    $data->managedata();
                              
                  ?>>
