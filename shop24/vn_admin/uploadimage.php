<?php 
require 'config.php';
if(isset($_POST['add'])){
   $image_name=$_FILES['image']['name'];// ten anh
   $tmp=$_FILES['image']['tmp_name'];// duong dan bo nho tam
   $dir='./uploads/';// đường dẫn thư mục
   if($image_name!=""){
       move_uploaded_file($tmp, $dir.$image_name);
   }
   
    $title=$_POST['title'];
    $content=$_POST['content'];
    $status=$_POST['status'];
    if($title!=""){
        $sql="INSERT INTO news(news_title,news_content,news_status, news_image) 
        VALUE('$title','$content',$status,'$image_name')";
        //echo $sql;die;
        mysqli_query($conn, $sql);
        header('Location: news_list.php');
    }
}
?>
<html>
    <head>
    
        <title>Thêm mới</title>
    </head>

    <body>
        <h1>Đăng ký bài viết</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <p></p>
        <table>
            <tr>
                <td>Tên bài viết</td>
                <td><input name="title" value="" type="text"></td>
            </tr>
             <tr>
                <td>Ảnh đại diện</td>
                <td><input name="image" type="file"></td>
            </tr>
             <tr>
                <td>Nội dung</td>
                <td>
                    <textarea name="content" rows="10" cols="10"></textarea>
                </td>
            </tr>
             <tr>
                <td>Trạng thái</td>
                <td>
                    <select name="status">
                        <option value="1">Hoạt động</option>
                        <option value="0">Không hoạt động</option>
                    </select>
                </td >              
            </tr>
            <tr >
                <td colspan="2"><input name="add" value="Thêm mới" type="submit"></td>
            </tr>
        </table>
        </form>
    </body>
</html>