
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<link rel="stylesheet" href="../asset/css/login.css">

<title>Med Alisto</title>

  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div style="" class="col-lg-7 m-auto p-0">
              <div class="card bg-transparent p-3 border-0"  style="height: 90vh;display: grid;place-items: center;">
                <form style="margin: auto;width: 400px;max-width: 100%;" method="POST" action="../controller/controller.php">
                  <div class="text-right"><img src="../images/logo.png" width="100"></div>
                  <h1 class="title_signin mt-4" style="color: #cee672;">Logged In</h1>
                  <label>Enter your username and password to sign in</label>
                  <br><br>
                  <div class="form-group">
                    <label>Username*</label>
                    <div class="form-control pl-2 p-0 border-0 rounded-0 bg-light">
                      <input type="text" name="email" id="email" placeholder="Username" class="bg-light rounded w-100 h-100 border-0" style="outline: none;">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <div class="form-control pl-2 pr-2 p-0 border-0 rounded-0 bg-light d-flex" style="place-items:center;">
                      <input id="password-field" type="password" name="password" placeholder="********" class="rounded w-100 h-100 border-0 bg-light" style="outline: none;">
                      <i toggle="#password-field" class="fas fa-eye text-muted toggle-password"></i>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="form-control p-0 border-0">
                      <input type="submit" name="login" class="rounded rounded-0 signin btn-lg text-white w-100 border-0" value="Login" style="outline: none;background-color: #cee672;" onclick="lsRememberMe()">
                    </div>
                  </div>
                </form>
              </div>
        </div>
      </div>
    </div>

    <script src="../asset/js/jquery.slim.min.js"></script>
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/fontawesome.js"></script>
    <script type="text/javascript">
      $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
          input.attr("type", "text");
      }else{
        input.attr("type", "password");
      }
  });
    </script>>
  </body>
</html>