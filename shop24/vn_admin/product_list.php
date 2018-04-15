<?php
require 'connect.php';
require 'include/header.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
 require 'include/aside.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       DANH MỤC SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên sản phẩm</th>
                  <th>Ảnh đại diện</th>
                  <th>Tên danh mục</th>                 
                  <th>Trạng thái</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
<?php
$sql = 'SELECT * FROM sanpham';

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); // ham tra ve so ban ghi nhan duoc
$i =1;
if ($count>0){
while ($row = mysqli_fetch_array($result)) {
?>
                <tr>
                  <td><?php echo $i;?></td>                  
                  <td><?php echo $row['model']; ?> </td>
                  <td><img width="100px" src="image_product/<?php echo $row['img'];?>"/></td>
                  <td><?php echo $row['list_of_products']; ?></td>
                  <td>Hiển thị</td>
                  <td><a href="product_edit.html">Sửa</a>  |  <a href="#">Xóa</a></td>
                </tr>
<?php
$i++;
}
}?>
                
              
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
 require 'includde/footer.php';
 ?>
