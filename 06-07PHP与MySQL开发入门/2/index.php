

<?php session_start(); ?>
<!-- 在您把用户信息存储到 PHP session 中之前，首先必须启动会话。
注释：session_start() 函数必须位于 <html> 标签之前： -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 2.PHP基础操作</title>
    <script src="https://cdn.bootcss.com/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
    
<?php
//Array
// $arrayTest=array(0=>"apple",1=>"test");
// echo json_encode($arrayTest);
?>

<?php
//Session
// 存储和取回 session 变量的正确方法是使用 PHP $_SESSION 变量：
// $_SESSION['view']=1;
// echo $_SESSION['view'];
?>


<form action="a.php" method="get">
   <label>用户:</label> <input type="text" name="username" id="username">
   <label>密码:</label> <input type="text" name="password" id="password" >
    <button type="submite"  value="submite" id="btn">提交</button> 
        
</form>
<script>
$("#btn").on("click",function(e){
    e.preventDefault();
        $.ajax({
            url:"a.php",
            type:"POST",
            dataType:"json",
            data:{
                username:$("#username").val(),
                password:$("#password").val()
            },
            success:function(d){
            console.log(d);
            },error:function(d){
                    console.log("fauilt")
            }
        })
})


</script>
</body>
</html>