<?php
require_once '../include.php';

if(isset($_SESSION['uid'])){

        $chars =bulidRandomString(3, 32);

        $link = connect();

        $school_num  =isset($_POST['school_num'])? $_POST['school_num']:null;

        $student_num = isset($_POST['student_num'])? $_POST['student_num']:null;

        $id_num =isset($_POST['id_num'])? $_POST['id_num']:null;

        $phone = isset($_POST['phone'])? $_POST['phone']:null;

        $uid = $_SESSION['uid'];

        $fileInfo = $_FILES['img_src'];

	    if($fileInfo){

	        $img_src = uploadFile($fileInfo,'ident_img');

	        $insert_img = "insert into student_auth(certification_src,uid) values(?,?)";
            
            $stmt=mysqli_prepare($link,$insert_img);

            $stmt->bind_param('sd',$img_src,$uid);

            $result_insert=mysqli_stmt_execute($stmt);


            //插入学生认证信息插入user_info表中
            $insert_sql="insert into user_info(
                        school_num,id_num,student_num,phone,uid) 
                        values(?,?,?,?,?)";

            $stmt=mysqli_prepare($link,$insert_sql);

            $stmt->bind_param('ssssd',$school_num,$id_num,$student_num,$phone,$uid);

            $result_insert=mysqli_stmt_execute($stmt); 
            // var_dump($result_insert);die;
            
            if($result_insert){
               echo "<script>alert('您已认证成功，返回主页');location='../mainpage.php'</script>";
               exit;
           }else {
               echo "<script>alert('认证失败,你已经认证过了');location='../ident.php'</script>";
               exit;
           }

	    }else{

	    echo "非法的文件格式";

		}

}else{
    
    echo "<script>alert('您还未登录,请登录后再进行认证');location='../login.php'</script>";
}


