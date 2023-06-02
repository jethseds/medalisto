<?php
    
    include '../config/config.php';
    session_start();
    class users extends Connection{

        public function manageusers(){



            if (isset($_POST['saveadmin'])) {

                $user_id = $_POST['user_id'];
                $fullname = $_POST['name'];
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $img = $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "../images/".$img);
                
                if ($img == '') {
                    $sqlinsert = "UPDATE users SET fullname = ?, email = ?,password = ?, passwordtxt = ? WHERE users_id = '".$user_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$fullname,$email,$password,$_POST['password']]);
               
                } else {

                    $sqlinsert = "UPDATE users SET img = ?, fullname = ?,email = ?,password = ?, passwordtxt = ? WHERE users_id = '".$user_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$img,$fullname,$email,$password,$_POST['password']]);
                    
                }

                echo "<script type='text/javascript'>alert('Successfully Edit Profile');</script>";
                echo "<script>window.location.href='../admin/dashboard.php';</script>";    
                
            }

        }

    }

    $usersrun = new users();
    $usersrun->manageusers();

?>
