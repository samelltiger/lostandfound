<?php
require_once '../include.php';

$chars =bulidRandomString(3, 32);

$link = connect();

$type = $_POST['type'];

$title  =isset($_POST['title'])? $_POST['title']:null;

$content = isset($_POST['content'])? $_POST['content']:null;

$qq =isset($_POST['qq'])? $_POST['qq']:null;

$phone_num = isset($_POST['phone_num'])? $_POST['phone_num']:null;

$wechat =isset($_POST['wechat'])? $_POST['wechat']:null;
if (isset( $_SESSION['uid'])) {

    $uid = $_SESSION['uid'];

    $fileInfo = $_FILES['img_src'];

    if($fileInfo){

        $img_src = uploadFile($fileInfo);
        
                $insert_sql="insert into lost_found(
                            uid,type,title,img_src,content,phone_num,qq,wechat) 
                            values(?,?,?,?,?,?,?,?)";

                $stmt=mysqli_prepare($link,$insert_sql);

                $stmt->bind_param('ddssssss',$uid,$type,$title,$img_src,$content,$phone_num,$qq,$wechat);

                $result_insert=mysqli_stmt_execute($stmt); 
            
                if($result_insert){
                   echo "<script>alert('您已发布成功，返回发布');location='../mainpage.php'</script>";
                   exit;
               }else {
                   echo "<script>alert('发布失败,请重新发布！';location='../pickup.php')</script>";
                   exit;
               }

    }else{
        echo "非法的文件格式";
    }

}
else{
    echo "<script>alert('您还未登录，请先登录再发布');location='../login.php'</script>";
}






