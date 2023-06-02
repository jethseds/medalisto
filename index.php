<?php session_start(); ?>
<?php include 'config/config.php'; ?>
<?php class data extends Connection{ public function managedata(){ ?>
<?php include 'data/data.php'; ?>
<?php



?>
<!doctype html>
<html lang="en">
  <head><?php include 'include/head.php'; ?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
  </head>
  
  <body>
    <?php include 'include/navbar.php'; ?>
    <div class="homebg">
        <div class="row m-auto">
          <div class="col-lg-12 col-md-12 text-center">
            <h2 class="text-dark font-weight-bold">Scan <span style="color: #cee672;">QR Code</span> To Access the <span style="color: #cee672;">Form</span></h2>
            <br>
            <video id="camera" class="col-lg-7 col-md-12"></video>
              <div id="qrcode" style="display: none;"></div>
              <input type="hidden" id="pass">
          </div>
        </div>
    </div>
    
    <?php include 'include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
              <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>


<script type="text/javascript">
  
let scanner = new Instascan.Scanner({
                video: document.getElementById("camera")
              });

              let resultado = document.getElementById("qrcode");
              let pass = document.getElementById("pass");
              scanner.addListener("scan", function(content) {
                resultado.innerText = content;
                pass.value = content;
                $.ajax({
                  url: 'controller/scanController.php',
                  type: 'POST',
                  data: {qrcode:$('#pass').val(),},
                  success: function(data){

                  var data = JSON.parse(data);

                    if(data.statusCode==1){      
                         
                      location.href = 'concern.php'
                    }else if(data.statusCode==0){      
                         
                          alert('Invalid Qr Code')
                    }
                  }
                })
                scanner.stop();
              });
              Instascan.Camera.getCameras()
                .then(function(cameras) {
                  if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                  } else {
                    resultado.innerText = "No cameras found.";
                  }
                })
                .catch(function(e) {
                  resultado.innerText = e;
                });

</script>


  </body>
</html>
<?php } } $data = new data();$data->managedata(); ?>