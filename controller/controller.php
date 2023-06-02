<?php
    session_start();
    include '../config/config.php';

    // use PHPMailer\PHPMailer\PHPMailer;

    // require_once "../sendphpmailer/PHPMailer.php";
    // require_once "../sendphpmailer/SMTP.php";
    // require_once "../sendphpmailer/Exception.php";

    class controller extends Connection{

        public function managecontroller(){

            // Register Customers
            if (isset($_POST['register'])) {

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $middlename = $_POST['middlename'];
                $birthdate = $_POST['birthdate'];
                $age = $_POST['age'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $passwordtxt = $_POST['password'];

                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([$email]);

                if ($stmt->rowcount() > 0) {

                    echo "<script type='text/javascript'>alert('Email Already Exist');</script>";
                    echo "<script>window.location.href='../register.php';</script>";

                } else {

                    $sql = "INSERT INTO users (firstname,lastname,middlename,birthdate,age,address,contact,email,password,passwordtxt) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $stmt = $this->conn()->prepare($sql);
                    $stmt->execute([$firstname,$lastname,$middlename,$birthdate,$age,$address,$contact,$email,$password,$passwordtxt]);
               
                    echo "<script type='text/javascript'>alert('Successfully Register');</script>";
                    echo "<script>window.location.href='../login.php';</script>";

                }

            }

            // Customers Login
            if (isset($_POST['signin'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([$email]);

                if ($stmt->rowcount() > 0) {

                  $row = $stmt->fetch();

                  if (password_verify($password, $row['password'])) {
                    
                      header('location:../customers/welcome.php');
                      $_SESSION['users_id'] = $row['users_id'];

                  } else {

                    echo "<script type='text/javascript'>alert('Invalid Email And Password');</script>";
                    echo "<script>window.location.href='../login.php';</script>";

                  }

                } else {

                    echo "<script type='text/javascript'>alert('Invalid Email And Password');</script>";
                    echo "<script>window.location.href='../login.php';</script>";

                } 
               
            } 
       
            // Change Password
            if (isset($_POST['changepassword'])) {

                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $confirmpassword = $_POST['confirmpassword'];
                $code = $_POST['code'];

                if ($_POST['password'] != $confirmpassword) {
            
                    echo "<script type='text/javascript'>alert('Password Not Match');</script>";
                    echo "<script>window.location.href='../changepassword.php?code=".$code."';</script>";

                }else{

                    $sql = "UPDATE users SET password = ?, passwordtxt = ? WHERE code = '".$code."'";
                    $stmt = $this->conn()->prepare($sql);
                    $stmt->execute([$password,$_POST['password']]);

                    echo "<script type='text/javascript'>alert('Successfully Change Password');</script>";
                    echo "<script>window.location.href='../login.php';</script>";
                }

            }

            // Admin Login
            if (isset($_POST['login'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([$email]);

                if ($stmt->rowcount() > 0) {

                  $row = $stmt->fetch();

                  if (password_verify($password, $row['password'])) {

                      header('location:../admin/dashboard.php?dashboard=dashboard');
                      $_SESSION['users_id'] = $row['users_id'];

                  } else {

                    echo "<script type='text/javascript'>alert('Invalid Username And Password');</script>";
                    echo "<script>window.location.href='../admin/index.php';</script>";

                  }

                } else {

                    echo "<script type='text/javascript'>alert('Invalid Username And Password');</script>";
                    echo "<script>window.location.href='../admin/index.php';</script>";

                } 
               
            } 
        

            if (isset($_POST['submitform'])) {

                $code = uniqid(10);
                $fullname = $_POST['fullname'];
                $address = $_POST['address'];
                $age = $_POST['age'];
                $email = $_POST['email'];
                $contactnumber = $_POST['contactnumber'];
                $medicalhistory = $_POST['medicalhistory'];
                $type = $_POST['type'];
                $formulation = $_POST['formulation'];
                $manufacturer = $_POST['manufacturer'];
                $name = $_POST['name'];
                $mlmg = $_POST['mlmg'];
                $price = $_POST['price'];
                $expirationdate = $_POST['expirationdate'];
                $month = date('m');
                $year = date('Y');

                $sql = "SELECT * FROM information WHERE fullname = ? AND formulation = ? AND name = ? AND mlmg = ? AND price = ?";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([$fullname,$formulation,$name,$mlmg,$price]);
                if ($stmt->rowcount() > 0) {

                    $_SESSION['error'] = 'error';
                    echo "<script>window.location.href='../form.php';</script>";

                }else{

                    $sql = "INSERT INTO information (code,fullname,address,age,email,contactnumber,medicalhistory,type,formulation,manufacturer,name,mlmg,price,expirationdate,month,year) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                    $stmt = $this->conn()->prepare($sql);
                    $stmt->execute([$code,$fullname,$address,$age,$email,$contactnumber,$medicalhistory,$type,$formulation,$manufacturer,$name,$mlmg,$price,$expirationdate,$month,$year]);
                        
                    $_SESSION['code'] = $code;
                    $_SESSION['success'] = 'success';
                    echo "<script>window.location.href='../form.php';</script>";

                }

                
            }


            if (isset($_POST['submitsurvey'])) {

                $code = uniqid(10);
                $usedevice = $_POST['usedevice'];
                $date = $_POST['date'];
                $intervention = $_POST['intervention'];
                $awareness = $_POST['awareness'];
                $awarenessq1 = $_POST['awarenessq1'];
                $awarenessq2 = $_POST['awarenessq2'];
                $awarenessq3 = $_POST['awarenessq3'];
                $awarenessq4 = $_POST['awarenessq4'];
                $diffidence = $_POST['diffidence'];
                $diffidenceq1 = $_POST['diffidenceq1'];
                $diffidenceq2 = $_POST['diffidenceq2'];
                $diffidenceq3 = $_POST['diffidenceq3'];
                $diffidenceq4 = $_POST['diffidenceq4'];
                $diffidenceq5 = $_POST['diffidenceq5'];
                $diffidenceq6 = $_POST['diffidenceq6'];
                $diffidenceq7 = $_POST['diffidenceq7'];
                $diffidenceq8 = $_POST['diffidenceq8'];
                $lethargy = $_POST['lethargy'];
                $lethargyq1 = $_POST['lethargyq1'];
                $lethargyq2 = $_POST['lethargyq2'];
                $lethargyq3 = $_POST['lethargyq3'];
                $lethargyq4 = $_POST['lethargyq4'];
                $lethargyq5 = $_POST['lethargyq5'];
                $lethargyq6 = $_POST['lethargyq6'];
                $fear = $_POST['fear'];
                $fearq1 = $_POST['fearq1'];
                $fearq2 = $_POST['fearq2'];
                $fearq3 = $_POST['fearq3'];
                $fearq4 = $_POST['fearq4'];
                $culpability = $_POST['culpability'];
                $culpabilityq1 = $_POST['culpabilityq1'];
                $culpabilityq2 = $_POST['culpabilityq2'];
                $culpabilityq3 = $_POST['culpabilityq3'];
                $culpabilityq4 = $_POST['culpabilityq4'];
                $ambition = $_POST['ambition'];
                $ambitionq1 = $_POST['ambitionq1'];
                $ambitionq2 = $_POST['ambitionq2'];
                $ambitionq3 = $_POST['ambitionq3'];
                $ambitionq4 = $_POST['ambitionq4'];
                $complacency = $_POST['complacency'];
                $complacencyq1 = $_POST['complacencyq1'];
                $complacencyq2 = $_POST['complacencyq2'];
                $complacencyq3 = $_POST['complacencyq3'];
                $complacencyq4 = $_POST['complacencyq4'];
                $complacencyq5 = $_POST['complacencyq5'];
                $complacencyq6 = $_POST['complacencyq6'];
                $complacencyq7 = $_POST['complacencyq7'];
                $complacencyq8 = $_POST['complacencyq8'];
                $complacencyq9 = $_POST['complacencyq9'];
                $complacencyq10 = $_POST['complacencyq10'];


                $sql = "SELECT * FROM survey WHERE code = ?";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([$code]);
                if ($stmt->rowcount() > 0) {

                    $_SESSION['error'] = 'error';
                    echo "<script>window.location.href='../survey.php';</script>";

                }else{

                    $sql = "INSERT INTO survey (usedevice,date,intervention,code,

awareness,
awarenessq1,
awarenessq2,
awarenessq3,
awarenessq4,
diffidence,
diffidenceq1,
diffidenceq2,
diffidenceq3,
diffidenceq4,
diffidenceq5,
diffidenceq6,
diffidenceq7,
diffidenceq8,
lethargy,
lethargyq1,
lethargyq2,
lethargyq3,
lethargyq4,
lethargyq5,
lethargyq6,
fear,
fearq1,
fearq2,
fearq3,
fearq4,
culpability,
culpabilityq1,
culpabilityq2,
culpabilityq3,
culpabilityq4,
ambition,
ambitionq1,
ambitionq2,
ambitionq3,
ambitionq4,
complacency,
complacencyq1,
complacencyq2,
complacencyq3,
complacencyq4,
complacencyq5,
complacencyq6,
complacencyq7,
complacencyq8,
complacencyq9,
complacencyq10



            ) VALUES (

?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,?
)";
                    $stmt = $this->conn()->prepare($sql);
                    $stmt->execute([$usedevice,$date,$intervention,$code,

$awareness,
$awarenessq1,
$awarenessq2,
$awarenessq3,
$awarenessq4,
$diffidence,
$diffidenceq1,
$diffidenceq2,
$diffidenceq3,
$diffidenceq4,
$diffidenceq5,
$diffidenceq6,
$diffidenceq7,
$diffidenceq8,
$lethargy,
$lethargyq1,
$lethargyq2,
$lethargyq3,
$lethargyq4,
$lethargyq5,
$lethargyq6,
$fear,
$fearq1,
$fearq2,
$fearq3,
$fearq4,
$culpability,
$culpabilityq1,
$culpabilityq2,
$culpabilityq3,
$culpabilityq4,
$ambition,
$ambitionq1,
$ambitionq2,
$ambitionq3,
$ambitionq4,
$complacency,
$complacencyq1,
$complacencyq2,
$complacencyq3,
$complacencyq4,
$complacencyq5,
$complacencyq6,
$complacencyq7,
$complacencyq8,
$complacencyq9,
$complacencyq10


]);
                    
                    $_SESSION['success'] = 'success';
                    echo "<script>window.location.href='../survey.php';</script>";

                }

                
            }


        }

    }

    $controllerrun = new controller();
    $controllerrun->managecontroller();

?>
