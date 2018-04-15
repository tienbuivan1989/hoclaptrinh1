<?php
require 'connect.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");
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
       Danh sách User Admin
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#"> Danh sách User Admin</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách User Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                   <th>Họ Và Tên</th>
                  <th>Tên đăng nhập</th>
                  <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
               <?php
               $sql="SELECT * FROM user";
               $result = mysqli_query($conn, $sql) ;
               $i=1;
               $count = mysqli_num_rows($result); // ham tra ve so ban ghi nhan duoc
               if ($count>0){
                while ($row = mysqli_fetch_array($result)) {

               ?>
                <tr>
                  <td><?php echo $i;?></td>                  
                  <td><?php echo $row['fullname']; ?></td> 
                  <td><?php echo $row['user']; ?></td> 
                  <td><?php if ($row['status']==1){
                  echo 'hoat dong';
                  }
                  else {echo 'khong hoat dong';} ?></td>
                  <td><a href="admin_new.php?id=<?php echo $row['id'];?>">Thêm</a>  |<a href="admin_edit.php?id=<?php echo $row['id'];?>">Sửa</a>  |  <a href="admin_delete.php?id=<?php echo $row['id'];?>">Xóa</a></td>
                </tr>
                <tr>
                  <?php
                  $i++;
                  }
                }
                ?>
                      
                </tbody>
                
              </table>
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