
<!doctype html>
<html lang="en">
  <head><?php include 'include/head.php'; ?></head>
  <body>
    <?php include 'include/navbar.php'; ?>
    <div class="login">
      <div class="row m-0">
        <div style="" class="col-lg-7 m-auto p-0">
            <div class="right">
              <div class="card bg-transparent border-0">
                <form method="POST" action="controller/controller.php" class="m-auto">
  <!--                 <div class="text-right"><img src="images/olfulogo.png" width="100"></div> -->
                  <h1 class="title_signin mt-4">Sign up</h1>
                  <br><br>
                  <div class="form-group">
                    <label>Firstname*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="text" name="firstname" id="firstname" placeholder="Firstname" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Lastname*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="text" name="lastname" id="lastname" placeholder="Lastname" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Middlename*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="text" name="middlename" id="middlename" placeholder="Middlename" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Birthdate*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="date" name="birthdate" id="birthdate" class="bg-transparent js-field--dob date-mask rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Age*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="number" name="age" id="age" min="18" placeholder="Age" class="bg-transparent js-field--age rounded w-100 h-100 border-0" style="outline: none;" required>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="text" name="address" id="address" placeholder="Address" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Contact* (format: xxxx-xxx-xxxx):</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="tel" name="contact" id="contact" pattern="^\d{4}-\d{3}-\d{4}$" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="text" name="email" id="email" placeholder="johndoe@email.com" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                  <div class="main-password form-control pl-2 pr-2 p-0 border-0 d-flex" style="place-items:center;background-color: #E5E7E9;">
                        <input type="password" class="input-password rounded w-100 h-100 bg-transparent border-0" style="outline: none;" aria-label="password" name="password" placeholder="********" required>
                        <a href="JavaScript:void(0);" class="icon-view">
                          <i toggle="#password-field" class="fas fa-eye text-muted toggle-password"></i>
                        </a>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="form-control p-0 border-0">
                      <input type="submit" name="register" class="rounded rounded-0 signin btn-lg text-white w-100 border-0" value="Sign up" style="outline: none;background-color: #6d4c41;" onclick="lsRememberMe()">
                    </div>
                  </div>
                  <br>
                  <div>
                    <a href="login.php" class="small text-muted text-decoration-none">Already have an account?</a>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
    
    <?php include 'include/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.min.js"></script>>
    <script type="text/javascript">
     $(document).ready(function () {
          $('.main-password').find('.input-password').each(function(index, input) {
              var $input = $(input);
              $input.parent().find('.icon-view').click(function() {
                  var change = "";
                  if ($(this).find('i').hasClass('fa-eye')) {
                      $(this).find('i').removeClass('fa-eye')
                      $(this).find('i').addClass('fa-eye-slash')
                      change = "text";
                  } else {
                      $(this).find('i').removeClass('fa-eye-slash')
                      $(this).find('i').addClass('fa-eye')
                      change = "password";
                  }
                  var rep = $("<input type='" + change + "' />")
                      .attr('id', $input.attr('id'))
                      .attr('name', $input.attr('name'))
                      .attr('class', $input.attr('class'))
                      .val($input.val())
                      .insertBefore($input);
                  $input.remove();
                  $input = rep;
              }).insertAfter($input);
          });
      });
     $('.date-mask').inputmask('mm/dd/yyyy');

      var handlers = {
        calculateAge: function (dob) {
          if (!dob) {
            return;
          }
          
          var ageDifMs = Date.now() - new Date(dob).getTime();
          var ageDate = new Date(ageDifMs);
          
          return Math.abs(ageDate.getUTCFullYear() - 1970);
        },
        populateAge: function () {
          var dob = $('.js-field--dob').val();
          var age = handlers.calculateAge(dob);
          $('.js-field--age').val(age);
        },
        submit: function(e) {
          e.preventDefault();
          handlers.populateAge();
        }
      }

      $('.date-mask').on('change', handlers.submit);
    </script>
  </body>
</html>