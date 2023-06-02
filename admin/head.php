<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Med Alisto</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style type="text/css">
      .mt20{
        margin-top:20px;
      }
      .bold{
        font-weight:bold;
      }

      /*chart style*/
      #legend ul {
        list-style: none;
      }

      #legend ul li {
        display: inline;
        padding-left: 30px;
        position: relative;
        margin-bottom: 4px;
       /* border-radius: 5px;*/
        padding: 2px 8px 2px 28px;
        font-size: 14px;
        cursor: default;
        -webkit-transition: background-color 200ms ease-in-out;
        -moz-transition: background-color 200ms ease-in-out;
        -o-transition: background-color 200ms ease-in-out;
        transition: background-color 200ms ease-in-out;
      }

      #legend li span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 100%;
       /* border-radius: 5px;*/
      }
      body > div > header > nav,
      body > div > header > a{
        background-color: #433b69 !important;
      }
      .radios{
        transform: scale(1.4);
      }
    </style>
    <style type="text/css">
 


@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}

.mobile_name{
  margin-top: 10px;
  margin-left: 5px;
  font-weight: bold;
  position: absolute;
  top: -5px;
  left: 60px;
  width: 200px;
  background-color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  display: none;
  z-index: 1;
}
.left_messages{
  width: 30rem !important;
}

@media screen and (max-width: 768px){
  .left_messages{
  width: 10rem !important;
}
.holdleft:hover .mobile_name{
  display: block;
}
.desktop_name{
  display: none;
}
}

.chat {
  width: 100%;
  max-width: 100%;
  height: 550px;
  padding: 15px 30px;
  margin: 0 auto;
  overflow-y: scroll;
  background-color: #fff;
  transform: rotate(180deg);
  direction: rtl;
  overflow-x: hidden;
}
.chat__wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }
.chat__message {
    font-size: 1.5rem;
    padding: 10px 20px;
    border-radius: 25px;
    color: #000;
    background-color: #e6e7ec;
    max-width: 600px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    position: relative;
    margin: 15px 0;
    word-break: break-all;
    transform: rotate(180deg);
    direction: ltr;
  }
  .chat__message-own{
    border-bottom-right-radius: unset;
  }
  .chat__message-sender{
    border-bottom-left-radius: unset;
  }
  .name{
    width: 100%;
  }
 .chat__message-own {
      color: #fff;
      margin-left: auto;
      background-color: #00a9de;
    }
    
  


.chat__form {
  background-color: #e0e0e0;
}
  .container_chat form {
    max-width: 340px;
    /*margin: 0 auto;*/
    height: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }
 .chat__form input {
    height: 40px;
    font-size: 16px;
    min-width: 90%;
    padding-left: 15px;
    background-color: #fff;
    /*border-radius: 15px;
    border: none;*/
  }
  .chat__form button {
    width: 10%;
    height: 100%;
    font-size: 16px;
    background-color: transparent;
    border: none;
    text-align: center;
    text-transform: uppercase;
    cursor: pointer;
  }
  .container_chat{
    height: 0px;
    transition: 0.3s;
  }
  .container_chat_show{
    height: 600px;
  }
    </style>