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
}
else{
    echo "<script>alert('您还未登录，请先登录再发布');location='../login.php'</script>";
}


$allowedExts = array("gif", "jpeg", "jpg", "png");

$temp = explode(".", $_FILES["img_src"]["name"]);

$extension = end($temp);     // 获取文件后缀名

if ((($_FILES["img_src"]["type"] == "image/gif")
    || ($_FILES["img_src"]["type"] == "image/jpeg")
    || ($_FILES["img_src"]["type"] == "image/jpg")
    || ($_FILES["img_src"]["type"] == "image/pjpeg")
    || ($_FILES["img_src"]["type"] == "image/x-png")
    || ($_FILES["img_src"]["type"] == "image/png"))
&& ($_FILES["img_src"]["size"] < 204800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
    if ($_FILES["img_src"]["error"] > 0)
    {
        echo "错误：: " . $_FILES["img_src"]["error"] . "<br>";
    }
    else
    {
        // echo "上传文件名: " . $_FILES["img_src"]["name"] . "<br>";
        // echo "文件类型: " . $_FILES["img_src"]["type"] . "<br>";
        // echo "文件大小: " . ($_FILES["img_src"]["size"] / 1024) . " kB<br>";
        // echo "文件临时存储的位置: " . $_FILES["img_src"]["tmp_name"] . "<br>";
        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        if (file_exists("./upload/" . $_FILES["img_src"]["name"]))
        {
            echo $_FILES["img_src"]["name"] . " 文件已经存在。 ";
        }
        else
        {   
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["img_src"]["tmp_name"], "./upload/".$chars.".jpg");
            $img_src = "upload/".$chars.".jpg";
            //插入拾物的数据
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
       }
   }
}
else
{
    echo "非法的文件格式";
}



