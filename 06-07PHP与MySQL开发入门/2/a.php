<?php
    // echo $_GET['username'];
    //$_GET 接受get请求
    // echo $_POST['username'];
    //$_POST接受Post请求
    $username= $_REQUEST['username'];
    //$_REQUEST接受所有请求
    if($username=="admin"){
        //登陆成功
        echo json_encode( array('msg' =>'login in success' ,'errorcode'=>"ok" ));

       }else{
        echo json_encode( array('msg' =>'login in fault' ,'errorcode'=>"no" ));
    }

?>