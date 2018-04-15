<?php
require 'connect.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");

if (isset ($_GET['id'])){
	$id=$_GET['id'];
	$sql = "SELECT * FROM user WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		$username = $row ['user'];
		$fullname = $row['fullname'];
		$status = $row['status'];
	}else {
		header ('location:list_admin.php');
	}
} else {
	header ('location:list_admin.php');
}
if (isset($_POST['themmoi'])){
	
  $fullname=$_POST['fullname'];
  $username=$_POST['username'];
  $status=$_POST['status'];
  $password=$_POST['password'];
  if ($fullname==''||$username==''||$status==''||$password==''){
    $error = "Vui long nhap day du thong tin";
  } else {
  $sql = "UPDATE user SET  user = '$username', fullname = '$fullname', password = '$password', status = '$status' WHERE id = $id";
    mysqli_query($conn, $sql);
    header('location:admin_new.php');
}
}

require'include/header.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
<?php
require'include/aside.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     SỬA USER ADMIN
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa User Admin</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa User Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
             <form action="" role="form" method="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="catname">Họ tên</label>
                  <input class="form-control" id="catname" placeholder="Họ tên " type="text" name="fullname" value="<?php echo $fullname;?>">
               </div>
			   <div class="form-group">
                  <label for="username">Tên đăng nhập</label>
                  <input class="form-control" id="username" placeholder="Tên đăng nhập" type="text" name="username" value="<?php echo $username;?>">
               </div>
               <div class="form-group">
                  <label for="password">Mật khẩu</label>
                  <input class="form-control" id="password" placeholder="Mật khẩu" type="password" name="password">
               </div>
                <div class="form-group">
                  <label for="password2">Xác nhận mật khẩu</label>
                  <input class="form-control" id="password2" placeholder="Nhập lại mật khẩu" type="password" name="password2">
               </div>
                <div class="form-group">
                <label>Trạng thái</label>
                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected" value="1">Hoạt động</option>
                  <option value="0">Tạm khóa</option>
                  
                </select>
                
              </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="themmoi">Cập Nhật</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
require'include/footer.php';
?>