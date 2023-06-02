<div id="contact" class="container-fluid footer p-5" style="position: absolute;">
    <div style="max-width: 1440px" class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="card border-0 bg-transparent text-center">
            <div class="card-body text-center">
              <h5 class="mb-4 text-white">Contact us</h5>
              <div><div><i class="fas fa-envelope"></i></div> <p>medalistophilippines@gmail.com</p></div>
              <div><div><i class="fas fa-globe"></i></div> <p>By visiting this page on our website: </p></div>
              <h6 class="mb-4 mt-5 text-white"><a class="text-white small" href="termsandconditions.php">Terms & Conditions</a></h6>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-6">
          <div class="card border-0 bg-transparent">
            <div class="card-body">
              <h5 class="mb-4 text-white">Information</h5>
              <div class="d-flex"><p>About</p></div>
              <div class="d-flex"><p>Contact</p></div>
              <div class="d-flex"><p>Blog</p></div>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-lg-6">
          <div class="card border-0 bg-transparent">
            <div class="card-body" style="text-align: justify;">
              <h5 class="mb-4 text-white">Description</h5>
              <small class="text-white">Property Location With a stay at Citystate Hotel Palanca in Manila, you'll be within a 15-minute drive of Rizal Park and U.S. Embassy. This hotel is 0.2 mi (0.3 km) from Quiapo Church and 1.9 mi (3 km) from San Agustin Church. Rooms Make yourself at home in one of the 40 air-conditioned guestrooms. Complimentary wireless Internet access keeps you connected, and cable programming is available for your entertainment. Private bathrooms with showers feature complimentary toiletries and slippers. Conveniences include desks and complimentary bottled water, and housekeeping is provided daily. Amenities This hotel offers designated smoking areas. Dining Take advantage of the hotel's 24-hour room service. Business, Other Amenities Featured amenities include a 24-hour front desk and an elevator
              </small>
            </div>
          </div>
        </div> -->
      </div>
    </div>
 </div>

<footer class="p-3 text-center">
<small>© Copyright 2022. City State Hotel</small>
</footer>

<script src="asset/js/jquery.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/fontawesome.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script>
  
document.getElementById('proof').addEventListener('change', function(){
      if (this.files[0] ) {
        var picture = new FileReader();
        picture.readAsDataURL(this.files[0]);
        picture.addEventListener('load', function(event) {
          document.getElementById('uploadedImage').setAttribute('src', event.target.result);
          document.getElementById('uploadedImage').style.display = 'block';
        });
        }
      });
    $('#submit').click(function(){
        alert('Please Login Required')
      })
   const rmCheck = document.getElementById("kmli"),
    emailInput = document.getElementById("email");
    passwordInput = document.getElementById("password-field");

  if (localStorage.checkbox && localStorage.checkbox !== "") {
    rmCheck.setAttribute("checked", "checked");
    emailInput.value = localStorage.username;
    passwordInput.value = localStorage.password;
  } else {
    rmCheck.removeAttribute("checked");
    emailInput.value = "";
    passwordInput.value = "";
  }

  function lsRememberMe() {
    if (rmCheck.checked && emailInput.value !== "" && passwordInput.value !== "") {
      localStorage.username = emailInput.value;
      localStorage.password = passwordInput.value;
      localStorage.checkbox = rmCheck.value;
    } else {
      localStorage.username = "";
      localStorage.checkbox = "";
    }
  }
  
  $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
          input.attr("type", "text");
      }else{
        input.attr("type", "password");
      }
  });


  
</script>