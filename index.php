<?php
ob_start();
session_start(); 
include_once("class/database/database.php"); 
include_once("connect.php");  
?>
<!doctype html>
<html class="bg-black"> 
    <head>
        <meta charset="utf-8">
        <title>ระบบจัดการข้อมูล</title>
        <meta name="keywords" content="">    
        <meta name="description" content="">  
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <link href="<?=$database->baseurl;?>/css/bootstrap.css" rel="stylesheet"  type="text/css" /> 
        <link href="<?=$database->baseurl;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />  
        <!-- Theme style -->
        <link href="<?=$database->baseurl;?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script src="<?=$database->baseurl;?>/js/bootbox.min.js"></script>
        <script src="<?=$database->baseurl;?>/js/bootbox.control.js"></script>
        <script src="<?=$database->baseurl;?>/js/processing.control.js"></script>
        <script src="<?=$database->baseurl;?>/js/jquery.js"></script>
        <script src="<?=$database->baseurl;?>/js/bootstrap.min.js"></script>
        <!-- AdminLTE App --> 
        
    </head>

    <body class="bg-black">

        <div class="form-box " id="login-box">
            <div class="header">LOGIN</div>
            <form action="../../index.html" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="ไอดีผู้ใช้งาน"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> จดจำผู้ใช้งาน
                    </div>
                </div>
                <div class="footer">                                                               
                    <!-- <button type="submit" class="btn bg-primary btn-block">Sign me in</button> --> 
                    <a href="administrator/" class="btn btn-primary btn-block">เข้าสู่ระบบ</a>
                     
                </div>
                <div class="margin text-center">
                    <span>Copyright © 2014 All Right Reserved.</span> 
                </div>
            </form> 
        </div>
        
    </body>
</html>