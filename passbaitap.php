<?php
    function login(){
        if(!empty($_POST)){
            // $cookieEmail = $_COOKIE['email'];//lay gia tri luu trong cookie
            // $cookiePwd = $_COOKIE['password'];
            // session]
            $sessionEmail =$sessionPwd ="";
            if(isset($_SESSION['email']))
            {
                $sessionEmail = $_SESSION['email'];
            }
            if(isset($_SESSION['password']))
            {
                $sessionPwd = $_SESSION['password'];
            }
            $email = $_POST['email'];//gia tri ma nguoi dung nhap vao
            $password = $_POST['password'];
            if($email == $sessionEmail && $password == $sessionPwd)
            {
                header("Location: welcome.php");
            }
        }
    }
?>