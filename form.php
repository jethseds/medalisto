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
          <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-dark font-weight-bold"><span style="color: #cee672;">Survey</span></h2>
            <br>
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Fullname*</small>
                  <input type="text" name="fullname" id="fullname" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Address*</small>
                  <input type="text" name="address" id="address" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-4 col-sm-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Age*</small>
                  <input type="number" name="age" id="age" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
              <div class="col-lg-5 col-md-4 col-sm-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Email*</small>
                  <input type="email" name="email" id="email" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
              <div class="col-lg-5 col-md-4 col-sm-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Contact Number*</small>
                  <input type="number" name="contactnumber" id="contactnumber" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Medical History*</small>
                  <textarea name="medicalhistory" id="medicalhistory" rows="8" required class="form-control border-0 btn-sm rounded-0"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <small class="float-left font-weight-bold text-secondary">Type Medicine*</small>
              <select name="type" id="type" required class="form-control border-0 btn-sm rounded-0">
                <option value="">Select</option>
                <option value="Branded">Branded</option>
                <option value="Generic">Generic</option>
              </select>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Formulation*</small>
                  <input type="text" name="formulation" id="formulation" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <small class="float-left font-weight-bold text-secondary">Manufacturer*</small>
                  <input type="text" name="manufacturer" id="manufacturer" required class="form-control border-0 btn-sm rounded-0">
                </div>
              </div>
            </div>
            <div class="form-group">
              <small class="float-left font-weight-bold text-secondary">Name*</small>
              <input name="name" id="name" required class="form-control border-0 btn-sm rounded-0">
            </div>
            <div class="form-group">
              <small class="float-left font-weight-bold text-secondary">Ml/Mg*</small>
              <input name="mlmg" id="mlmg" required class="form-control border-0 btn-sm rounded-0">
            </div>
            <div class="form-group">
              <small class="float-left font-weight-bold text-secondary">Price*</small>
              <input name="price" id="price" required class="form-control border-0 btn-sm rounded-0">
            </div>
            <div class="form-group">
              <small class="float-left font-weight-bold text-secondary">Expiration Date*</small>
              <input type="date" name="expirationdate" id="expirationdate" required class="form-control border-0 btn-sm rounded-0">
            </div>
            <div class="form-group text-right">
              <button type="submit" name="submitform" class="btn btn-lg text-white rounded-0 trigger-btn" style="background-color: #cee672;" >Submit</button>
            </div>
            
          </div>
        </div>
      </form>
    </div>
    <br><br><br><br><br>

    <?php include 'modalmessage.php'; ?>
    <?php include 'include/footer.php'; ?>
      
    <script>

     
      

      $('.succcessokmodal').click(function(){
        location.href = 'survey.php'
      })

      <?php if (isset($_SESSION['success'])) { ?>
        setInterval(function(){
          location.href = 'survey.php'
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


