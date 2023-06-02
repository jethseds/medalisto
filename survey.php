<?php session_start(); ?>
<?php include 'config/config.php'; ?>
<?php class data extends Connection{ public function managedata(){ ?>
<?php include 'data/data.php'; ?>
<?php



?>
<!doctype html>
<html lang="en">
  <head><?php include 'include/head.php'; ?>
  </head>
  
  <body class="bg-light">
    <?php include 'include/navbar.php'; ?>
    <br><br><br><br><br>
    <div class="container">
      <form method="POST" action="controller/controller.php">
        <div class="row m-auto">
          <div class="col-lg-12 col-md-12">
            <h3>A. Survey Questionnaires</h3>
            <h4 class="text-dark font-weight-bold text-center"><span style="color: #cee672;">MedAlisto:</span></h4>
            <p class="text-center"><i> Integration of Drug Surveillance QR Code System in Community Pharmacies in Davao City San Pedro College-Pharmacy Department</i></p>
            <br>
            <p>Date: <?php echo date('F j, Y'); ?></p>
            <ul>
              <li><p>Do you own a smartphone, tablet/ ipad that has a QR Code scanner?</p>
                <ul>
                  <li><input type="radio" name="usedevice" value="Yes"> Yes</li>
                  <li> <input type="radio" name="usedevice" value="No"> No</li>
                </ul>
              </li>
              <li><p>When did you send your report to the FDA?</p>
                  <input type="date" name="date" class="form-control">
              </li>
              <li><p>What MedAlisto intervention did you use?</p>
                  <select name="intervention" class="form-control">
                    <option value="">Select</option>
                    <option value="Sticker">Sticker</option>
                    <option value="Card">Card</option>
                    <option value="Standee">Standee</option>
                  </select>
              </li>
            </ul>
            <p><strong>Instruction: Check the corresponding box depending on your answer based on the choices.</strong></p>
            <ul>
              <p><strong>Guide on definitions:</strong></p>
              <li><strong>MedAlisto</strong> - the drug surveillance channel you recently used</li>
              <li><strong>Adverse drug effects</strong> - unwanted and negative effects from taking a medication; can also be associated with side effects</li>
              <li><strong>FDA (Food and Drug Administration)</strong> - government administration tasked to safeguard safe and rational standards and use of food and drugs in the country.</li>
            </ul>
            <br>
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
                  <td><input type="radio" name="awareness" value="Strongly agree" required></td>
                  <td><input type="radio" name="awareness" value="Agree" required></td>
                  <td><input type="radio" name="awareness" value="Neither Agree" required></td>
                  <td><input type="radio" name="awareness" value="Disagree" required></td>
                  <td><input type="radio" name="awareness" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  I am already aware of where to report</td>
                  <td><input type="radio" name="awarenessq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="awarenessq1" value="Agree" required></td>
                  <td><input type="radio" name="awarenessq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="awarenessq1" value="Disagree" required></td>
                  <td><input type="radio" name="awarenessq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  I already know how to submit my report.</td>
                  <td><input type="radio" name="awarenessq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="awarenessq2" value="Agree" required></td>
                  <td><input type="radio" name="awarenessq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="awarenessq2" value="Disagree" required></td>
                  <td><input type="radio" name="awarenessq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  I am familiar with e-reporting.</td>
                  <td><input type="radio" name="awarenessq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="awarenessq3" value="Agree" required></td>
                  <td><input type="radio" name="awarenessq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="awarenessq3" value="Disagree" required></td>
                  <td><input type="radio" name="awarenessq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  I am aware about the system because I had encountered the same before. </td>
                  <td><input type="radio" name="awarenessq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="awarenessq4" value="Agree" required></td>
                  <td><input type="radio" name="awarenessq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="awarenessq4" value="Disagree" required></td>
                  <td><input type="radio" name="awarenessq4" value="Strongly Disagree" required></td>
                </tr>

                <tr>
                  <td>Diffidence</td>
                  <td><input type="radio" name="diffidence" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidence" value="Agree" required></td>
                  <td><input type="radio" name="diffidence" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidence" value="Disagree" required></td>
                  <td><input type="radio" name="diffidence" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  I am already aware of where to report</td>
                  <td><input type="radio" name="diffidenceq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq1" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq1" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  I already know how to submit my report.</td>
                  <td><input type="radio" name="diffidenceq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq2" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq2" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  I am familiar with e-reporting.</td>
                  <td><input type="radio" name="diffidenceq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq3" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq3" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  I am aware about the system because I had encountered the same before. </td>
                  <td><input type="radio" name="diffidenceq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq4" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq4" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq4" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>5. This reporting system is not easy to use and follow.</td>
                  <td><input type="radio" name="diffidenceq5" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq5" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq5" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq5" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq5" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>6.  This reporting system is easy to use and follow.</td>
                  <td><input type="radio" name="diffidenceq6" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq6" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq6" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq6" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq6" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>7.  I would like to use this reporting system again.</td>
                  <td><input type="radio" name="diffidenceq7" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq7" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq7" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq7" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq7" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>8.  I would not like to use this reporting system again.</td>
                  <td><input type="radio" name="diffidenceq8" value="Strongly agree" required></td>
                  <td><input type="radio" name="diffidenceq8" value="Agree" required></td>
                  <td><input type="radio" name="diffidenceq8" value="Neither Agree" required></td>
                  <td><input type="radio" name="diffidenceq8" value="Disagree" required></td>
                  <td><input type="radio" name="diffidenceq8" value="Strongly Disagree" required></td>
                </tr>

                <tr>
                  <td>Lethargy</td>
                  <td><input type="radio" name="lethargy" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargy" value="Agree" required></td>
                  <td><input type="radio" name="lethargy" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargy" value="Disagree" required></td>
                  <td><input type="radio" name="lethargy" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  This reporting system is time-consuming.</td>
                  <td><input type="radio" name="lethargyq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargyq1" value="Agree" required></td>
                  <td><input type="radio" name="lethargyq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargyq1" value="Disagree" required></td>
                  <td><input type="radio" name="lethargyq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  This reporting system is not time-consuming</td>
                  <td><input type="radio" name="lethargyq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargyq2" value="Agree" required></td>
                  <td><input type="radio" name="lethargyq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargyq2" value="Disagree" required></td>
                  <td><input type="radio" name="lethargyq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  This reporting system requires too much effort and is laborious</td>
                  <td><input type="radio" name="lethargyq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargyq3" value="Agree" required></td>
                  <td><input type="radio" name="lethargyq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargyq3" value="Disagree" required></td>
                  <td><input type="radio" name="lethargyq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  This reporting system does not require too much effort and is easy to use</td>
                  <td><input type="radio" name="lethargyq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargyq4" value="Agree" required></td>
                  <td><input type="radio" name="lethargyq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargyq4" value="Disagree" required></td>
                  <td><input type="radio" name="lethargyq4" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>5.  I feel tired after using this reporting system</td>
                  <td><input type="radio" name="lethargyq5" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargyq5" value="Agree" required></td>
                  <td><input type="radio" name="lethargyq5" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargyq5" value="Disagree" required></td>
                  <td><input type="radio" name="lethargyq5" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>6.  I do not feel tired after using this reporting system</td>
                  <td><input type="radio" name="lethargyq6" value="Strongly agree" required></td>
                  <td><input type="radio" name="lethargyq6" value="Agree" required></td>
                  <td><input type="radio" name="lethargyq6" value="Neither Agree" required></td>
                  <td><input type="radio" name="lethargyq6" value="Disagree" required></td>
                  <td><input type="radio" name="lethargyq6" value="Strongly Disagree" required></td>
                </tr>

                <tr>
                  <td>Fear</td>
                  <td><input type="radio" name="fear" value="Strongly agree" required></td>
                  <td><input type="radio" name="fear" value="Agree" required></td>
                  <td><input type="radio" name="fear" value="Neither Agree" required></td>
                  <td><input type="radio" name="fear" value="Disagree" required></td>
                  <td><input type="radio" name="fear" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  I do not feel secure and safe using this reporting system. </td>
                  <td><input type="radio" name="fearq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="fearq1" value="Agree" required></td>
                  <td><input type="radio" name="fearq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="fearq1" value="Disagree" required></td>
                  <td><input type="radio" name="fearq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  I feel secure and safe using this reporting system.</td>
                  <td><input type="radio" name="fearq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="fearq2" value="Agree" required></td>
                  <td><input type="radio" name="fearq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="fearq2" value="Disagree" required></td>
                  <td><input type="radio" name="fearq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  I  do not feel comfortable with sharing my information using this reporting system.</td>
                  <td><input type="radio" name="fearq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="fearq3" value="Agree" required></td>
                  <td><input type="radio" name="fearq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="fearq3" value="Disagree" required></td>
                  <td><input type="radio" name="fearq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  I feel comfortable with sharing my information using this reporting system.</td>
                  <td><input type="radio" name="fearq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="fearq4" value="Agree" required></td>
                  <td><input type="radio" name="fearq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="fearq4" value="Disagree" required></td>
                  <td><input type="radio" name="fearq4" value="Strongly Disagree" required></td>
                </tr>

                <tr>
                  <td>Culpability</td>
                  <td><input type="radio" name="culpability" value="Strongly agree" required></td>
                  <td><input type="radio" name="culpability" value="Agree" required></td>
                  <td><input type="radio" name="culpability" value="Neither Agree" required></td>
                  <td><input type="radio" name="culpability" value="Disagree" required></td>
                  <td><input type="radio" name="culpability" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  I need assistance to use this reporting system.</td>
                  <td><input type="radio" name="culpabilityq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="culpabilityq1" value="Agree" required></td>
                  <td><input type="radio" name="culpabilityq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="culpabilityq1" value="Disagree" required></td>
                  <td><input type="radio" name="culpabilityq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  I do not need assistance to use this reporting system.</td>
                  <td><input type="radio" name="culpabilityq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="culpabilityq2" value="Agree" required></td>
                  <td><input type="radio" name="culpabilityq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="culpabilityq2" value="Disagree" required></td>
                  <td><input type="radio" name="culpabilityq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  I do not feel comfortable asking for assistance with this reporting system.</td>
                  <td><input type="radio" name="culpabilityq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="culpabilityq3" value="Agree" required></td>
                  <td><input type="radio" name="culpabilityq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="culpabilityq3" value="Disagree" required></td>
                  <td><input type="radio" name="culpabilityq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  I feel comfortable asking for assistance with this reporting system.</td>
                  <td><input type="radio" name="culpabilityq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="culpabilityq4" value="Agree" required></td>
                  <td><input type="radio" name="culpabilityq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="culpabilityq4" value="Disagree" required></td>
                  <td><input type="radio" name="culpabilityq4" value="Strongly Disagree" required></td>
                </tr>

                <tr>
                  <td>Ambition</td>
                  <td><input type="radio" name="ambition" value="Strongly agree" required></td>
                  <td><input type="radio" name="ambition" value="Agree" required></td>
                  <td><input type="radio" name="ambition" value="Neither Agree" required></td>
                  <td><input type="radio" name="ambition" value="Disagree" required></td>
                  <td><input type="radio" name="ambition" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  I would not prefer to use this reporting system again.</td>
                  <td><input type="radio" name="ambitionq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="ambitionq1" value="Agree" required></td>
                  <td><input type="radio" name="ambitionq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="ambitionq1" value="Disagree" required></td>
                  <td><input type="radio" name="ambitionq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  I would prefer using this reporting system again.</td>
                  <td><input type="radio" name="ambitionq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="ambitionq2" value="Agree" required></td>
                  <td><input type="radio" name="ambitionq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="ambitionq2" value="Disagree" required></td>
                  <td><input type="radio" name="ambitionq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  I would prefer not to report Adverse Drug Events again.</td>
                  <td><input type="radio" name="ambitionq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="ambitionq3" value="Agree" required></td>
                  <td><input type="radio" name="ambitionq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="ambitionq3" value="Disagree" required></td>
                  <td><input type="radio" name="ambitionq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  I would still prefer to report Adverse Drug Events with this reporting system.</td>
                  <td><input type="radio" name="ambitionq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="ambitionq4" value="Agree" required></td>
                  <td><input type="radio" name="ambitionq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="ambitionq4" value="Disagree" required></td>
                  <td><input type="radio" name="ambitionq4" value="Strongly Disagree" required></td>
                </tr>

                <tr>
                  <td>Complacency</td>
                  <td><input type="radio" name="complacency" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacency" value="Agree" required></td>
                  <td><input type="radio" name="complacency" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacency" value="Disagree" required></td>
                  <td><input type="radio" name="complacency" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>1.  I do not feel like my report is needed by the FDA.</td>
                  <td><input type="radio" name="complacencyq1" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq1" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq1" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq1" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq1" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>2.  I believe that my report is needed by the FDA.</td>
                  <td><input type="radio" name="complacencyq2" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq2" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq2" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq2" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq2" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>3.  I believe my report will not reach the FDA</td>
                  <td><input type="radio" name="complacencyq3" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq3" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq3" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq3" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq3" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>4.  I believe my report will reach the FDA</td>
                  <td><input type="radio" name="complacencyq4" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq4" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq4" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq4" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq4" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>5.  I do not believe that my report is significant.</td>
                  <td><input type="radio" name="complacencyq5" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq5" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq5" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq5" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq5" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>6.  I believe my report is significant.</td>
                  <td><input type="radio" name="complacencyq6" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq6" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq6" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq6" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq6" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>7.   The intervention is well integrated.</td>
                  <td><input type="radio" name="complacencyq7" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq7" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq7" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq7" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq7" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>8.  I would rather share the report myself by mouth/ through social media.</td>
                  <td><input type="radio" name="complacencyq8" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq8" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq8" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq8" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq8" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>9.   This intervention is especially beneficial for persons who enjoy typing their complaints.</td>
                  <td><input type="radio" name="complacencyq9" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq9" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq9" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq9" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq9" value="Strongly Disagree" required></td>
                </tr>
                <tr>
                  <td>10.  My report does not matter as O think all drugs on the market are already safe.</td>
                  <td><input type="radio" name="complacencyq10" value="Strongly agree" required></td>
                  <td><input type="radio" name="complacencyq10" value="Agree" required></td>
                  <td><input type="radio" name="complacencyq10" value="Neither Agree" required></td>
                  <td><input type="radio" name="complacencyq10" value="Disagree" required></td>
                  <td><input type="radio" name="complacencyq10" value="Strongly Disagree" required></td>
                </tr>
                
              </tbody>
            </table>
            <div class="form-group text-right">
              <button type="submit" id="submitsurvey" name="submitsurvey" class="btn btn-lg text-white rounded-0 trigger-btn" style="background-color: #cee672;" >Submit</button>
            </div>
            
          </div>
        </div>
      </form>
    </div>
    <br><br><br><br><br>

    <?php include 'modalmessage.php'; ?>
    <?php include 'include/footer.php'; ?>
      
    <script>
     
      // $('#submitsurvey').click(function() {
      //   $.ajax({
      //     url: 'controller/controller.php',
      //     type: 'POST',
      //     cache: false,
      //     data: $('#data_form').serialize(),
      //     success: function(response){
      //        var response = JSON.parse(response);
      //       if(response.statusCode==1){
      //         $('#successmodal').modal('show')
             
      //         setInterval(function(){
      //           location.href = 'index.php'
      //         },3000)
      //       }else{
      //         $('#errormodal').modal('show')
      //       }

      //     }
      //   });

      // });

      // $('.succcessokmodal').click(function(){
      //   location.href = 'index.php'
      // })

      $('.succcessokmodal').click(function(){
        location.href = 'index.php'
      })

      <?php if (isset($_SESSION['success'])) { ?>
        setInterval(function(){
          location.href = 'index.php'
        },3000)
        $('#successmodal').modal('show')

        <?php unset($_SESSION['success']); ?>

      <?php }else if (isset($_SESSION['error'])) { ?>
        $('#errormodal').modal('show')
        <?php unset($_SESSION['error']); ?>
      <?php } ?>
      
    </script>
  </body>
</html>
<?php } } $data = new data();$data->managedata(); ?>


