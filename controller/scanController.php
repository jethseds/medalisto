<?php


    session_start();
    include '../config/config.php';


    class controller extends Connection{

        public function managecontroller(){

            $qrcode = $_POST['qrcode'];

            $sql = "SELECT * FROM qrcode WHERE qrcode = ?";
            $stmt = $this->conn()->prepare($sql);
            $stmt->execute([$qrcode]);

            if ($stmt->rowcount() > 0) {
                echo json_encode(array("statusCode"=>1));
            }else{
                echo json_encode(array("statusCode"=>0));
            }

        }

    }

    $controllerrun = new controller();
    $controllerrun->managecontroller();

?>
