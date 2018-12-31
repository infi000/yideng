<?php 
// 链接数据库
header('Content-Type:application/json; charset=utf-8');
$con = mysqli_connect("localhost","root","","phplesson");
    //容错
    if(!$con){
        die("Connection 
            failed: " . mysqli_connect_error());

    }else{
        //输入数据编码
          mysqli_query($con,"set names utf8");
            //插入数据
            // $sql="INSERT INTO `news` (`newstitle`, `newsimage`, `newscontent`, `addtime`) VALUES ( '元旦假期，南方多地下了一场“有情调”的雪', '           https://www.chinanews.com/tp/2018/12-29/U855P4T8D8716096F5012DT20181229222442.jpg', '　　受强冷空气影响，浙江、上海、湖南、湖北、江西、安徽等省市3        0日遭遇降温降雪天气，局部出现暴雪。为有效应对低温雪情，各地积极行动起来，切实保障安全生产和群众生活平稳有序。', '2018-12-25')";
          //删除数据
            // $sql="DELETE FROM `news` WHERE `newsid`=2";
            //更新
          // $sql="UPDATE `news` SET  `newstitle`='测试测试' WHERE `newsid`=3";

          //从前端获取数据
           // $newstitle= $_REQUEST['newstitle'];
           // $newsimage= $_REQUEST['newsimage'];
           // $newscontent= $_REQUEST['newscontent'];
           // $addtime= $_REQUEST['addtime'];
           // echo ' $newstitle'. $newstitle;
           // echo "<Br>";
           // echo' $newsimage'.$newsimage;
           //   echo "<Br>";
           // echo' $newscontent'. $newscontent;
           //   echo "<Br>";
           // echo "$addtime".$addtime;
           //   echo "<Br>";
 // $sql="INSERT INTO `news` (`newstitle`, `newsimage`, `newscontent`, `addtime`) VALUES ( ' ".$newstitle."', ' ".$newsimage."', ' ".$newscontent."', ' ".$addtime."')";
 //  $res=mysqli_query($con,$sql);
 //  if(!$res){
 //      echo "error：".$sql."<br>".mysqli_error($con);
 //  }else{
 //      echo "插入成功";
 //  }


          //查询
        $sql="SELECT * FROM `news` WHERE 1";

            $res=mysqli_query($con,$sql);
            if(!$res){
                echo "error：".$sql."<br>".mysqli_error($con);
            }else{
               //创建一个数组
                $arr=Array();
          
            while($row = mysqli_fetch_array($res))
                    {
                            array_push($arr, Array('newsid'=>$row['newsid'],'newstitle'=>$row['newstitle'],'newscontent'=>$row['newscontent'],'newsimage'=>$row['newsimage'],'addtime'=>$row['addtime']));
                    }
                echo json_encode( array('status'=>0,'res'=>$arr));
            }
    }
mysqli_close($con);
 ?>